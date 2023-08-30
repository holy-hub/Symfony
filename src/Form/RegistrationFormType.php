<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    private $authorizationChecker;

    public function __construct(AuthorizationCheckerInterface $authorizationChecker)
    {
        $this->authorizationChecker = $authorizationChecker;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        if ($user = $this->authorizationChecker->isGranted(['IS_AUTHENTICATED_FULLY'])) {
            $builder->remove('codeAgent')
                ->add('codeAgent', null, ['label_attr' => ['for' => 'codeAgent'], 'attr' => ['id' => 'codeAgent', 'class' => 'mb-3 form-floating text-center form-control', 'placeholder' => 'Code Agent'] ]);
        }

        $builder
            ->add('username', null, ['label_attr' => ['for' => 'username'], 'attr' => ['id' => 'username', 'class' => 'mb-3 form-floating text-center form-control', 'placeholder' => 'Username'] ])
            ->add('email', null, ['label_attr' => ['for' => 'email'], 'attr' => ['id' => 'email', 'class' => 'mb-3 form-floating text-center form-control', 'placeholder' => 'Email'] ])
            ->add('codeAgent', null, ['label_attr' => ['for' => 'codeAgent'], 'label' => ' ', 'disabled' => 'disabled', 'attr' => ['id' => 'codeAgent', 'class' => 'mb-3 form-floating text-center form-control', 'placeholder' => 'New account'] ])
            ->add('agreeTerms', CheckboxType::class, [
                'attr' => ['class' => 'form-check-input p-2 mt-3'],
                'label_attr' => ['class' => 'm-3'],
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]), ], ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'label_attr' => ['for' => 'plainPassword'],
                'attr' => ['autocomplete' => 'new-password', 'id' => 'plainPassword', 'class' => 'mb-3 form-floating mb-md-0 text-center form-control', 'placeholder' => 'Password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 8,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
