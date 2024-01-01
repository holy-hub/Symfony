<?php

namespace App\Form;

use App\Entity\Ticket;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class TicketType extends AbstractType
{
    private $authorizationChecker;
    private $security;

    public function __construct(AuthorizationCheckerInterface $authorizationChecker, Security $security)
    {
        $this->authorizationChecker = $authorizationChecker;
        $this->security = $security;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $user = $this->security->getUser();
        
        if ($this->authorizationChecker->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $filteredData = $options['filtered_data'];
            $builder
                ->add('username', null, ['data' => $user->getUsername(), 'label_attr' => ['for' => 'username'], 'attr' =>['id' => 'username', 'class' => 'mb-3 form-floating text-center form-control', 'disabled' => 'disabled'] ])
                // ->add('dateDeCreation', null, ['label_attr' => ['for' => 'dateDeCreation'], 'attr' =>['id' => 'dateDeCreation', 'class' => 'mb-3 form-floating mb-md-0 text-center form-control', 'placeholder' => 'date de creation'] ])
                ->add('numeroDeParking', null, ['label_attr' => ['for' => 'numeroDeParking'], 'attr' =>['id' => 'numeroDeParking', 'class' => 'mb-3 form-floating mb-md-0 text-center form-control', 'placeholder' => 'numero de parking'] ])
                ->add('agent', null, ['choices' => $filteredData, 'label_attr' => ['for' => 'agent'], 'attr' =>['id' => 'agent', 'class' => 'mb-3 form-floating text-center form-control', 'placeholder' => 'agent code'] ])
            ;
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ticket::class,
            'filtered_data' => null,
        ]);
    }
}
