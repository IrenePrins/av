<?php

namespace App\Form;

use App\Entity\Aanbod;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AanbodType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('slug')
            ->add('streetname')
            ->add('number')
            ->add('zipcode')
            ->add('typeAanschaf')
            ->add('typeObject')
            ->add('description')
            ->add('price')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Aanbod::class,
        ]);
    }
}
