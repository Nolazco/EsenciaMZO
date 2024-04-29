<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserForm;
use App\Model\UserRepo;
use App\Service\MysqlStorage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class UserManagement extends AbstractController
{
    protected UserRepo $userModel;

    public function __construct(MysqlStorage $storage)
    {
        $this->userModel = $storage->getModel(User::class);
    }

    protected function ifEntity(int $id): User
    {
        $user = $this->userModel->get($id);
        if ($user === null) {
            throw new NotFoundHttpException();
        }
        return $user;
    }

    #[Route(name: 'users', path: '/users', methods: 'GET')]
    public function list(Request $request): Response
    {
        $page = $request->query->get('page', 1);

        $entities = $this->userModel->all(limit: 10, page: $page - 1);
        return $this->render('users.html.twig', [
            'users' => $entities,
            'page' => $page,
            'rol' => $request->getSession()->get('rol')
        ]);
    }

    #[Route('/user/new', methods: [ 'GET', 'POST' ])]
    public function create(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(UserForm::class, $user, ['new' => true]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if (!empty($user->avatar)) {
                $new_file = $user->avatar->move('avatars', uniqid() . ".{$user->avatar->guessExtension()}");
                $user->avatar = $new_file;
            }
            $user->setPasswordHash($user->password);
            $this->userModel->save($user);
            return $this->redirectToRoute('users');
        }

        return $this->render('user_edit.html.twig', [ 'user' => $user, 'form' => $form, 'new' => true, 'rol' => $request->getSession()->get('rol') ]);
    }

    #[Route('/user/{id}/edit', methods: [ 'GET', 'POST' ])]
    public function edit(Request $request, int $id): Response
    {
        $user = $this->ifEntity($id);
        $prevPass = $user->password;
        $currentPath = $user->getAvatarUri();
        $form = $this->createForm(UserForm::class, $user, ['new' => false]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var User */
            $entity = $form->getData();
                //dd($entity);
            if (!empty($entity->avatar)) {
                $new_file = $entity->avatar->move('avatars', uniqid() . ".{$entity->avatar->guessExtension()}");
                $entity->avatar = $new_file;
            }else{
                $entity->setAvatarFromUri($currentPath);
            }
            if(empty($entity->password)){
                $entity->setPassword($prevPass);
            }
            $entity->setPasswordHash($entity->password);
            $this->userModel->update($entity);
            return $this->redirectToRoute('users');
        }

        return $this->render('user_edit.html.twig', [ 'user' => $user, 'form' => $form, 'new' => false, 'rol' => $request->getSession()->get('rol')]);
    }

    #[Route('/user/{id}/delete', methods: 'GET')]
    public function delete(Request $request, int $id): Response
    {
        $user = $this->ifEntity($id);
        if ($request->query->has('confirmation')) {
            $this->userModel->delete($user);
            return $this->redirectToRoute('users');
        }
        return $this->render('user_delete.html.twig', ['user' => $user, 'rol' => $request->getSession()->get('rol')]);
    }

    #[Route('/user/{id}', methods: 'GET')]
    public function details(Request $request, int $id): Response
    {
        $entity = $this->ifEntity($id);
        return $this->render('user.html.twig', ['user' => $entity, 'rol' => $request->getSession()->get('rol')]);
    }
}
