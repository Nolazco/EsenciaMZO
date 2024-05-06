<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class UserForm extends AbstractType
{
    public function configureOptions(OptionsResolver $options): void
    {
        $options->setRequired('new');
        $options->setAllowedTypes('new', ['bool']);
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('submit', SubmitType::class)
            ->add('name', TextType::class, [
                'label' => 'Nombre',
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Apellidos'
            ])
            ->add('nickname', TextType::class, [
                'label' => 'Apodo',
                'required' => false
            ])
            ->add('email', EmailType::class, [
                'label' => 'Correo electronico'
            ])
            ->add('bio', TextareaType::class, [
                'label' => 'Biografia',
                'required' => false
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'password.not_match',
                'required' => $options['new'],
                'first_options'  => ['label' => 'Contraseña'],
                'second_options' => ['label' => 'Confirmar contraseña'],

            ])
            ->add('avatar', FileType::class, [
                'required' => false,
                'constraints' => [
                    new File(
                        maxSize: '2M',
                        extensions: ['jpg', 'jpeg', 'png', 'gif'],
                    ),
                ],
            ]);
    }
}
