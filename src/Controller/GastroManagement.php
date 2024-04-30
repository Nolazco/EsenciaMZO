<?php 

namespace App\Controller;

use App\Entity\Gastro;
use App\Form\GastroForm;
use App\Model\GastroRepo;
use App\Service\MysqlStorage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class GastroManagement extends AbstractController{
    protected GastroRepo $gastroModel;

    public function __construct(MysqlStorage $storage){
        $this->gastroModel = $storage->getModel(Gastro::class);
    }

    protected function ifEntity(int $id): Gastro{
        $gastro = $this->gastroModel->get($id);
        if ($gastro === null){
            throw new NotFoundHttpException();
        }
        return $gastro;
    }

    #[Route(name: 'gastronomia', path: '/gastronomia', methods: 'GET')]
    public function list(Request $request): Response {
        $page = $request->query->get('page', 1);

        $entities = $this->gastroModel->all(limit: 10, page: $page - 1);
        return $this->render('gastronomy.html.twig', [
            'gastro' => $entities,
            'page' => $page
        ]);
    }

    #[Route('/gastronomia/new', methods: ['GET', 'POST'])]
    public function create(Request $request): Response {
        $gastro = new Gastro();
        $form = $this->createForm(GastroForm::class, $gastro);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $this->gastroModel->save($gastro);
            return $this->redirectToRoute('gastronomia');
        }

        return $this->render('gastro_edit.html.twig', [
            'gastro' => $gastro,
            'form' => $form
        ]);
    }

    #[Route('/gastronomia/{id}', methods: 'GET')]
    public function details(Request $resquest, int $id): Response{
        $entity = $this->ifEntity($id);

        return $this->render('gastro.html.twig', ['gastro' => $entity]);
    }

    #[Route('/gastronomia/{id}/edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $id): Response{
        $entity = $this->ifEntity($id);
        $form = $this->createForm(GastroForm::class, $entity);
        $form->handleRequest($request);

        //dd($entity);

        if($form->isSubmitted() && $form->isValid()){
            /** @var Gastro */
            $entity = $form->getData();
            $this->gastroModel->update($entity);
            return $this->redirectToRoute('gastronomia');
        }

        return $this->render('gastro_edit.html.twig', [
            'gastro' => $entity,
            'form' => $form]);
    }

    #[Route('/gastronomia/{id}/delete', methods: 'GET')]
    public function delete(Request $request, int $id): Response{
        $entity = $this->ifEntity($id);
        $this->gastroModel->delete($entity);
        return $this->redirectToRoute('gastronomia');
    }
}
