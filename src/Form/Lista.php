<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;


class Lista extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('stan', ChoiceType::class, [
                'choices' => [
                    'Niezapłacona' => 0,
                    'Windykowana' => 1,
                    'U Prawnika' => 2,
                    'Zapłacona' => 3,
                    'Sprawa sporna' => 4
                ]
            ])
            ->add('notatki', TextareaType::class, [ 'required' => false ])
            ->add('save', SubmitType::class, ['label' => 'Zapisz']);
    }

}