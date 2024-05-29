<?php

namespace App\Controller;

use App\Entity\Turismo;
use App\Entity\User;
use App\Form\TourForm;
use App\Model\TurismoRepo;
use App\Model\UserRepo;
use App\Service\MysqlStorage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class TurismoManagement extends AbstractController{
    protected TurismoRepo $turismoModel;
    protected UserRepo $userModel;

    public function __construct(MysqlStorage $storage){
        $this->turismoModel = $storage->getModel(Turismo::class);
        $this->userModel = $storage->getModel(User::class);
    }

    protected function ifEntity(int $id): Turismo{
        $turismo = $this->turismoModel->get($id);
        if($turismo === null){
            throw new NotFoundHttpException();
        }
        return $turismo;
    }

    #[Route(path: '/dashboard/turismo', methods: 'GET')]
    public function list(Request $r): Response{
        $page = $r->query->get('page', 1);

        if($r->getSession()->get('role') == 1){
            $entities = $this->turismoModel->all(limit: 10, page: $page - 1);
        }else if($r->getSession()->get('role') == 2){
            $entities = $this->turismoModel->getByAuthor(author: $r->getSession()->get('login'),limit: 10, page: $page - 1);
        }

        return $this->render('tourism.html.twig', [
            'tour' => $entities,
            'page' => $page
        ]);
    }

    #[Route(path: '/dashboard/turismo/new', methods: ['GET', 'POST'])]
    public function create(Request $r): Response{
        $tour = new Turismo();
        $tour->author = $r->getSession()->get('login');
        $form = $this->createForm(TourForm::class, $tour);
        $form->handleRequest($r);

        if($form->isSubmitted() && $form->isValid()){
            if(!empty($tour->photo)){
                $new_file = $tour->photo->move('tour_main_photos', uniqid().".{$tour->photo->guessExtension()}");
                $tour->photo = $new_file;
            }
            $tour->date = date("d-m-Y");

            $this->turismoModel->save($tour);
            return $this->redirect('/dashboard/turismo');
        }

        return $this->render('tour_edit.html.twig', [
            'tour' => $tour,
            'form' => $form
        ]);
    }

    #[Route('/dashboard/turismo/details/{id}', methods: 'GET')]
    public function details(Request $r, int $id): Response{
        $entity = $this->ifEntity($id);

        return $this->render('tour.html.twig', ['tour' => $entity]);
    }

    #[Route('/dashboard/turismo/{id}/edit', methods: ['GET', 'POST'])]
    public function edit(Request $r, int $id): Response{
        $entity = $this->ifEntity($id);
        $form = $this->createForm(TourForm::class, $entity);
        $form->handleRequest($r);

        //dd($entity);

        if($form->isSubmitted() && $form->isValid()){
            /** @var Turismo */
            $entity = $form->getData();
            $this->turismoModel->update($entity);
            return $this->redirect('/dashboard/turismo');
        }

        return $this->render('tour_edit.html.twig', [
            'tour' => $entity,
            'form' => $form]
        );
    }

    #[Route('/dashboard/turismo/{id}/delete', methods: 'GET')]
    public function delete(Request $request, int $id): Response{
        $entity = $this->ifEntity($id);
        unlink($entity->photo);
        $this->turismoModel->delete($entity);
        return $this->redirect('/dashboard/turismo');
    }

    #[Route('/turismo/{id}', methods: 'GET')]
    public function seeMore(Request $r, int $id): Response{
        $entity = $this->ifEntity($id);
        $author = $this->userModel->get($entity->author);

        return $this->render('visitor/tour_see.html.twig', [
            'tour' => $entity,
            'author' => $author,
            'rol' => $r->getSession()->has('login') ? $r->getSession()->get('role') : 0,
            'name' => $r->getSession()->has('login') ? $r->getSession()->get('name') : 0,
            'loged' => $r->getSession()->has('login') ? true : false
        ]);
    }

    #[Route(name: 'tourism', path: '/tourism', methods: 'GET')]
    public function tourism(Request $r): Response{
        $entities = $this->turismoModel->getDesc();

        return $this->render('/visitor/tourism.html.twig', [
            'tour' => $entities,
            'rol' => $r->getSession()->has('login') ? $r->getSession()->get('role') : 0,
            'name' => $r->getSession()->has('login') ? $r->getSession()->get('name') : 0,
            'loged' => $r->getSession()->has('login') ? true : false
        ]);
    }
}
