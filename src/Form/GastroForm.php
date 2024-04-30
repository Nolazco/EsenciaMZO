<?php 

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class GastroForm extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options): void{
        $builder
            ->add('submit', SubmitType::class)
            ->add('name', TextType::class, [
                'label' => 'Nombre',
                'required' => true
            ])
            ->add('desc', TextType::class, [
                'label' => 'Descripción corta',
                'required' => true
            ])
            ->add('body', TextareaType::class, [
                'label' => 'Informacion',
                'required' => true
            ])
            ->add('delivery', ChoiceType::class, [
                'label' => '¿Entrega a domicilio?',
                'choices' => [
                    'Si' => true,
                    'No' => false
                ],
                'required' => true
            ])
            ->add('phone', TelType::class, [
                'label' => 'Telefono',
                'required' => false
            ])
            ->add('location', TextType::class, [
                'label' => 'Direccion',
                'required' => true
            ])
            ->add('menu', FileType::class, [
                'required' => false,
                'constraints' => [
                    new File(
                        maxSize: '10M',
                        extensions: ['pdf'],
                    ),
                ],
            ]);

    }
}
