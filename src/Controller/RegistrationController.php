<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/register')]
class RegistrationController extends AbstractController
{
    #[Route('/admin', name: 'app_register_admin')]
    public function register_admin(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user, $form->get('plainPassword')->getData()
                )
            );
            $user->setRoles(['ROLE_ADMIN'])->setManager($user)->setCodeAgent('New account');

            $entityManager->persist($user);
            // $entityManager->persist($admin);
            $entityManager->flush();
            // dd($user);
            return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('registration/register.html.twig', [
            'name' => 'Admin',
            'registrationForm' => $form->createView(),
        ]);
    }
    #[Route('/agent', name: 'app_register_agent')]
    public function register_agent(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $user->setCodeAgent('New account');
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $admin = $this->getUser();
            $user->setRoles(['ROLE_AGENT']);
            $user->setManager($admin);


            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_user_admin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('registration/register.html.twig', [
            'name' => 'Agent',
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/client', name: 'app_register_client')]
    public function register_client(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $user->setRoles(['ROLE_CLIENT']);
            $user->setManager($user);
            $user->setCodeAgent('New account');

            $entityManager->persist($user);
            $entityManager->flush();
            // dd($user);
            return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('registration/register.html.twig', [
            'name' => 'Client',
            'registrationForm' => $form->createView(),
        ]);
    }
}
