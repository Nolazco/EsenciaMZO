<?php

namespace App\Controller;

use App\Entity\Gastro;
use App\Entity\Turismo;
use App\Entity\User;
use App\Model\GastroRepo;
use App\Model\TurismoRepo;
use App\Model\UserRepo;
use App\Service\MysqlStorage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Index extends AbstractController
{
    protected UserRepo $userModel;
    protected GastroRepo $gastroModel;
    protected TurismoRepo $turismoModel;

    public function __construct(MysqlStorage $storage) {
        $this->userModel = $storage->getModel(User::class);
        $this->gastroModel = $storage->getModel(Gastro::class);
        $this->turismoModel = $storage->getModel(Turismo::class);
    }

    #[Route(name: 'home', path: '/', methods: 'GET')]
    public function home(): Response{
        $gastro = $this->gastroModel->all();
        $turismo = $this->turismoModel->all();
        return $this->render('home.html.twig', [
            'gastro' => $gastro,
            'turismo' => $turismo
        ]);
    }

    #[Route(name: 'dashboard', path: '/dashboard', methods: 'GET')]
    public function dashboard(): Response{
        return $this->render('dashboard.html.twig');
    }

}
