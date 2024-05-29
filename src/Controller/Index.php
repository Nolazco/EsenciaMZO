<?php

namespace App\Controller;

use App\Entity\Gastro;
use App\Entity\Turismo;
use App\Entity\User;
use App\Form\LoginForm;
use App\Form\UserForm;
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
    public function home(Request $r): Response{
        $sess = $r->getSession();
        //dd(date("d-m-Y"));
        $gastro = $this->gastroModel->getLastThree();
        $turismo = $this->turismoModel->getLastThree();

        if($sess->has('login')){
            return $this->render('visitor/home.html.twig', [
                'gastro' => $gastro,
                'turismo' => $turismo,
                'name' => $sess->get('name'),
                'rol' => $sess->get('role'),
                'loged' => '1'
            ]);
        }else{
            return $this->render('visitor/home.html.twig', [
                'gastro' => $gastro,
                'turismo' => $turismo,
                'rol' => '0',
                'loged' => '2'
            ]);
        }
    }

    #[Route(name: 'register', path: '/register', methods: ['GET', 'POST'])]
    public function register(Request $r): Response{
        $user = new User();
        $form = $this->createForm(UserForm::class, $user, ['new' => true]);
        $form->handleRequest($r);

        if($form->isSubmitted() && $form->isValid()){
            if(!empty($user->avatar)){
                $avatar = $user->avatar->move('avatars', uniqid().".{$user->avatar->guessExtension()}");
                $user->avatar = $avatar;
            }
            $user->setPasswordHash($user->password);
            //dd($user);

            if($this->userModel->save($user)){
                return $this->redirectToRoute('login');
            }else{
                echo "error?";
            }
        }

        return $this->render('user_edit.html.twig', [
            'user' => $user,
            'form' => $form,
            'new' => true,
            'rol' => $r->getSession()->get('role'),
            'notShow' => true
        ]);
    }

    #[Route(name: 'login', path: '/login', methods: ['GET', 'POST'])]
    public function login(Request $r): Response{
        $sess = $r->getSession();
        $user = new User();

        if($sess->has('login'))
            return $this->redirectToRoute('home');

        $form = $this->createForm(LoginForm::class);
        $form->handleRequest($r);

        if($form->isSubmitted() && $form->isValid()){
            $email = $form->get('email')->getData();
            $password = $form->get('password')->getData();
            $user = $this->userModel->getByEmail($email);

            //dd($user);

            if(!$user)
                $form->addError(new FormError('Credenciales incorrectas'));
            else{
                $dbPass = $user->password;

                if(password_verify($password, $dbPass)){
                    //dd($user);
                    if($user->nickname != null)
                        $sess->set('name', $user->nickname);
                    else
                        $sess->set('name', $user->name);

                    $sess->set('login', $user->id);
                    $sess->set('role', $user->role);

                    return $this->redirectToRoute('home');
                }
            }

            $form->addError(new FormError('Credenciales incorrectas'));
        }

        return $this->render('login.html.twig', [
            'form' => $form,
            'notShow' => true
        ]);
    }

    #[Route(name: 'logout', path: '/logout', methods: 'GET')]
    public function logout(Request $r): Response{
        $sess = $r->getSession()->remove('login');
        return $this->redirectToRoute('home');
    }

    #[Route(name: 'dashboard', path: '/dashboard', methods: 'GET')]
    public function dashboard(Request $r): Response{
        if(!(($r->getSession()->get('role') == 1) || ($r->getSession()->get('role') == 2))) {
            return $this->redirectToRoute('login');
        }
        return $this->render('dashboard.html.twig', [
            'role' => $r->getSession()->get('role')
        ]);
    }

}
