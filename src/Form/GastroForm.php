<?php 

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GastroForm extends AbstractType{
    public function configureOptions(OptionsResolver $options): void{
        $options->setRequired('new');
        $options->setAllowedTypes('new', ['bool']);
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void{
        $builder
            ->add('submit')
    }
}
