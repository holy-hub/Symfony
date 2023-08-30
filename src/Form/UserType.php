<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', null, ['label_attr' => ['for' => 'name'], 'attr' => ['id' => 'name', 'class' => 'mb-3 form-floating mb-md-0 text-center form-control', 'placeholder' => 'Username'] ])
            ->add('email', null, ['label_attr' => ['for' => 'email'], 'attr' => ['id' => 'email', 'class' => 'mb-3 form-floating text-center form-control', 'placeholder' => 'Email'] ])
            ->add('password', null, ['label_attr' => ['for' => 'password'], 'attr' => ['id' => 'password', 'class' => 'mb-3 form-floating mb-md-0 text-center form-control', 'placeholder' => 'Password'] ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
