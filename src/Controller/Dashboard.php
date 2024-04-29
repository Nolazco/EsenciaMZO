<?php

namespace App\Controller;

use App\Service\MysqlStorage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Route;

class Dashboard extends AbstractController{
    public function __construct(MysqlStorage $storage){

    }

    #[Route(name: 'dashboard', path: '/dashboard', methods: 'POST')]
    public function dashboard(): Response{
        return $this->render('dashboard.html.twig');
    }
}
