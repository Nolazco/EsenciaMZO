<?php

namespace App\Controller;

use App\Entity\Turismo;
use App\Model\TurismoRepo;
use App\Service\MysqlStorage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class TurismoManagement extends AbstractController{
    protected TurismoRepo $turismoModel;

    public function __construct(MysqlStorage $storage){
        $this->turismoModel = $storage->getModel(Turismo::class);
    }

    protected function ifEntity(int $id): Turismo{
        $turismo = $this->turismoModel->get($id);
        if($turismo === null){
            throw new NotFoundHttpException();
        }
        return $turismo;
    }
}
