<?php 

namespace App\Controller;

use App\Entity\Gastro;
use App\Entity\User;
use App\Form\GastroForm;
use App\Model\GastroRepo;
use App\Model\UserRepo;
use App\Service\MysqlStorage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class GastroManagement extends AbstractController{
    protected GastroRepo $gastroModel;
    protected UserRepo $userModel;

    public function __construct(MysqlStorage $storage){
        $this->gastroModel = $storage->getModel(Gastro::class);
        $this->userModel = $storage->getModel(User::class);
    }

    protected function ifEntity(int $id): Gastro{
        $gastro = $this->gastroModel->get($id);
        if ($gastro === null){
            throw new NotFoundHttpException();
        }
        return $gastro;
    }

    #[Route(name: 'gastronomia', path: '/dashboard/gastronomia', methods: 'GET')]
    public function list(Request $request): Response {
        $page = $request->query->get('page', 1);

        if($request->getSession()->get('role') == 1){
            $entities = $this->gastroModel->all(limit: 10, page: $page - 1);
        }else if($request->getSession()->get('role') == 2){
            $entities = $this->gastroModel->getByAuthor(author: $request->getSession()->get('login'),limit: 10, page: $page - 1);
        }
        return $this->render('gastronomy.html.twig', [
            'gastro' => $entities,
            'page' => $page
        ]);
    }

    #[Route('/dashboard/gastronomia/new', methods: ['GET', 'POST'])]
    public function create(Request $request): Response {
        $gastro = new Gastro();
        $gastro->author = $request->getSession()->get('login');
        $form = $this->createForm(GastroForm::class, $gastro);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            if(!empty($gastro->logo)){
                $new_file = $gastro->logo->move('logos', uniqid().".{$gastro->logo->guessExtension()}");
                $gastro->logo = $new_file;
            }
            if(!empty($gastro->menu)){
                $new_file = $gastro->menu->move('menus', uniqid().".{$gastro->menu->guessExtension()}");
                $gastro->menu = $new_file;
            }
            $gastro->date = date("d-m-Y");
            //dd($gastro);
            $this->gastroModel->save($gastro);
            return $this->redirect('/dashboard/gastronomia');
        }

        return $this->render('gastro_edit.html.twig', [
            'gastro' => $gastro,
            'form' => $form
        ]);
    }

    #[Route('/dashboard/gastronomia/details/{id}', methods: 'GET')]
    public function details(Request $resquest, int $id): Response{
        $entity = $this->ifEntity($id);

        return $this->render('gastro.html.twig', ['gastro' => $entity]);
    }

    #[Route('/dashboard/gastronomia/{id}/edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $id): Response{
        $entity = $this->ifEntity($id);
        $form = $this->createForm(GastroForm::class, $entity);
        $form->handleRequest($request);

        //dd($entity);

        if($form->isSubmitted() && $form->isValid()){
            /** @var Gastro */
            $entity = $form->getData();
            $this->gastroModel->update($entity);
            return $this->redirect('/dashboard/gastronomia');
        }

        return $this->render('gastro_edit.html.twig', [
            'gastro' => $entity,
            'form' => $form]
        );
    }

    #[Route('/dashboard/gastronomia/{id}/delete', methods: 'GET')]
    public function delete(Request $request, int $id): Response{
        $entity = $this->ifEntity($id);
        unlink($entity->logo);
        unlink($entity->menu);
        $this->gastroModel->delete($entity);
        return $this->redirect('/dashboard/gastronomia');
    }

    #[Route('/gastronomia/{id}', methods: 'GET')]
    public function seeMore(Request $r, int $id): Response{
        $entity = $this->ifEntity($id);
        $author = $this->userModel->get($entity->author);

        return $this->render('visitor/gastro_see.html.twig', [
            'gastro' => $entity,
            'author' => $author,
            'rol' => $r->getSession()->has('login') ? $r->getSession()->get('role') : 0,
            'name' => $r->getSession()->has('login') ? $r->getSession()->get('name') : 0,
            'loged' => $r->getSession()->has('login') ? true : false
        ]);
    }

    #[Route(name: 'gastronomy', path: '/gastronomy', methods: 'GET')]
    public function gastronomy(Request $r): Response{
        $entities = $this->gastroModel->getDesc();

        return $this->render('/visitor/gastronomy.html.twig', [
            'gastro' => $entities,
            'rol' => $r->getSession()->has('login') ? $r->getSession()->get('role') : 0,
            'name' => $r->getSession()->has('login') ? $r->getSession()->get('name') : 0,
            'loged' => $r->getSession()->has('login') ? true : false
        ]);
    }
}
