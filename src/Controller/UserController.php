<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/admin/dashboard', name: 'app_user_admin_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        $user = $this->getUser();

        return $this->render('user/index.html.twig', [
            'user' => $user,
            'agents' => $user->getUsers(),
        ]);
    }

    #[Route('/agent/dashboard', name: 'app_user_agent_index', methods: ['GET'])]
    public function indexAgent(): Response
    {
        $user = $this->getUser();

        return $this->render('user/indexAgent.html.twig', [
            // 'users' => $userRepository->findAll(),
            'user' => $user,
        ]);
    }

    #[Route('/client/dashboard', name: 'app_user_client_index', methods: ['GET'])]
    public function indexClient(): Response
    {
        $user = $this->getUser();

        return $this->render('user/indexClient.html.twig', [
            // 'users' => $userRepository->findAll(),
            'user' => $user,
        ]);
    }

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/table/agent', name: 'app_table_view')]
    public function tableAgent(): Response
    {
        return $this->render('user/tableAgent.html.twig', []);
    }

    #[Route('/client/ticket', name: 'app_user_client_ticket')]
    public function clientTicket(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $tickets = $entityManager->getRepository(Ticket::class)->findby([
            'user' => $user,
        ]);

        return $this->render('ticket/index.html.twig', [
            'tickets' => $tickets,
        ]);
    }

    #[Route('/agent/ticket', name: 'app_user_agent_ticket')]
    public function agentTicket(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $tickets = $entityManager->getRepository(Ticket::class)->findby([
            'user' => $user,
        ]);

        return $this->render('ticket/index.html.twig', [
            'tickets' => $tickets,
        ]);
    }
}
