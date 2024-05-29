<?php

namespace App\Controller;

use App\Entity\Eventos;
use App\Entity\User;
use App\Form\EventForm;
use App\Model\EventosRepo;
use App\Model\UserRepo;
use App\Service\MysqlStorage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class EventosManagement extends AbstractController
{
    protected EventosRepo $eventsModel;
    protected UserRepo $userModel;

    public function __construct(MysqlStorage $storage)
    {
        $this->eventsModel = $storage->getModel(Eventos::class);
        $this->userModel = $storage->getModel(User::class);
    }

    protected function ifEntity(int $id): Eventos
    {
        $event = $this->eventsModel->get($id);
        if ($event === null) {
            throw new NotFoundHttpException();
        }
        return $event;
    }

    #[Route(path: '/dashboard/events', methods: 'GET')]
    public function list(Request $r): Response{
        $page = $r->query->get('page', 1);

        if($r->getSession()->get('role') == 1){
            $entities = $this->eventsModel->all(limit: 10, page: $page -1);
        }else if($r->getSession()->get('login') == 2){
            $entities = $this->eventsModel->getByAuthor(author: $r->getSession()->get('login'), limit: 10, page: $page - 1);
        }

        return $this->render('events.html.twig', [
            'events' => $entities,
            'page' => $page
        ]);
    }

    #[Route(path: '/dashboard/events/new', methods: ['GET', 'POST'])]
    public function create(Request $r): Response{
        $event = new Eventos();
        $event->author = $r->getSession()->get('login');
        $form = $this->createForm(EventForm::class, $event);
        $form->handleRequest($r);

        if($form->isSubmitted() && $form->isValid()){
            if(!empty($event->main)){
                $new_file = $event->main->move('events_main_photos', uniqid().".{$event->main->guessExtension()}");
                $event->main = $new_file;
            }
            if(!empty($event->attach)){
                $new_file = $event->attach->move('events_attachments', uniqid().".{$event->attach->guessExtension()}");
                $event->attach = $new_file;
            }
            $event->date = date("d-m-Y");

            $this->eventsModel->save($event);
            return $this->redirect('/dashboard/events');
        }

        return $this->render('event_edit.html.twig', [
            'event' => $event,
            'form' => $form
        ]);
    }

    #[Route(path: '/dashboard/events/details/{id}', methods: 'GET')]
    public function details(Request $r, int $id): Response{
        $entity = $this->ifEntity($id);

        return $this->render('event.html.twig', ['event' => $entity]);
    }

    #[Route(path: '/dashboard/events/{id}/edit', methods: ['GET', 'POST'])]
    public function edit(Request $r, int $id): Response{
        $entity = $this->ifEntity($id);
        $form = $this->createForm(EventForm::class, $entity);

        if($form->isSubmitted() && $form->isValid()){
            /** @var Eventos */
            $entity = $form->getData();
            $this->eventsModel->update($entity);
            return $this->redirect('/dashboard/events');
        }

        return $this->render('event_edit.html.twig', [
            'event' => $entity,
            'form' => $form
        ]);
    }

    #[Route(path: '/dashboard/events/{id}/delete', methods: 'GET')]
    public function delete(Request $r, int $id): Response{
        $entity = $this->ifEntity($id);
        unlink($entity->attach);
        unlink($entity->main);
        $this->eventsModel->delete($entity);
        return $this->redirect('/dashboard/events');
    }

    #[Route(path: '/events/official', methods: 'GET')]
    public function eventsOfficial(Request $r): Response{
        $entities = $this->eventsModel->getOfficial();

        return $this->render('/visitor/events.html.twig', [
            'events' => $entities,
            'rol' => $r->getSession()->has('login') ? $r->getSession()->get('role') : 0,
            'name' => $r->getSession()->has('login') ? $r->getSession()->get('name') : 0,
            'loged' => $r->getSession()->has('login') ? true : false,
            'official' => true
        ]);
    }

    #[Route(path: '/events/unofficial', methods: 'GET')]
    public function eventsUnofficial(Request $r): Response{
        $entities = $this->eventsModel->getUnofficial();

        return $this->render('/visitor/events.html.twig', [
            'events' => $entities,
            'rol' => $r->getSession()->has('login') ? $r->getSession()->get('role') : 0,
            'name' => $r->getSession()->has('login') ? $r->getSession()->get('name') : 0,
            'loged' => $r->getSession()->has('login') ? true : false,
            'official' => false
        ]);
    }

    #[Route(path: '/events/{id}', methods: 'GET')]
    public function seeMore(Request $r, int $id): Response{
        $entity = $this->ifEntity($id);
        $author = $this->userModel->get($entity->author);

        return $this->render('visitor/event_see.html.twig', [
            'event' => $entity,
            'author' => $author,
            'rol' => $r->getSession()->has('login') ? $r->getSession()->get('role') : 0,
            'name' => $r->getSession()->has('login') ? $r->getSession()->get('name') : 0,
            'loged' => $r->getSession()->has('login') ? true : false
        ]);
    }
}
