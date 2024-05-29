<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;

class EventForm extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options): void{
        $builder
            ->add('submit', SubmitType::class)
            ->add('name', TextType::class, [
                'label' => 'Nombre del evento',
                'required' => true
            ])
            ->add('desc', TextType::class, [
                'label' => 'Descripcion corta',
                'required' => true
            ])
            ->add('body', TextareaType::class, [
                'label' => 'Informacion',
                'required' => true
            ])
            ->add('location', TextType::class, [
                'label' => 'Direccion',
                'required' => true
            ])
            ->add('category', ChoiceType::class, [
                'label' => '¿Evento oficial?',
                'choices' => [
                    'Oficial' => "1",
                    'No oficial' => "2"
                ],
                'required' => true
            ])
            ->add('doe', DateType::class, [
                'widget' => 'single_text',
                'input' => 'string',
                'required' => true
            ])
            ->add('attach', FileType::class, [
                'label' => 'Panfleto',
                'required' => true,
                'constraints' => [
                    new File(
                        maxSize: '10M',
                        extensions: ['pdf'],
                    ),
                ],
            ])
            ->add('main', FileType::class, [
                'label' => 'Presentación del evento',
                'required' => true,
                'constraints' => [
                    new File(
                        maxSize: '2M',
                        extensions: ['jpg', 'jpeg', 'png', 'gif'],
                    ),
                ],
            ]);
    } 
}
