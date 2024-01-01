<?php

// git push -u ticket ticket/master
namespace App\Controller;

use App\Entity\Ticket;
use App\Entity\User;
use App\Form\TicketType;
use App\Repository\TicketRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user/ticket')]
class TicketController extends AbstractController
{
    #[Route('/all', name: 'app_ticket_index_all', methods: ['GET'])]
    public function indexAll(TicketRepository $ticketRepository): Response
    {
        return $this->render('ticket/indexAll.html.twig', [
            'tickets' => $ticketRepository->findAll(),
        ]);
    }

    #[Route('/', name: 'app_ticket_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $repository = $entityManager->getRepository(Ticket::class);
        $query = $repository->createQueryBuilder('u')
            ->where('u.username = :client')
            ->setParameter('client', $user->getUsername())
            ->getQuery();
        $tickets = $query->getResult();

        return $this->render('ticket/index.html.twig', [
            'tickets' => $tickets,
        ]);
    }

    #[Route('/new', name: 'app_ticket_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $ticket = new Ticket();
        $repository = $entityManager->getRepository(User::class);
        $username = $repository->findOneBy(['username' => $user->getUsername()]);
        $query = $repository->createQueryBuilder('u')
            ->where('u.codeAgent != :agent')
            ->setParameter('agent', 'New account')
            ->getQuery();
        $filteredData = $query->getResult();

        $form = $this->createForm(TicketType::class, $ticket, [
            'filtered_data' => $filteredData,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (!empty($username)) { $ticket->setUsername($username); } else { $ticket->setUsername('Ticket_Client'); }
            $ticket->setDateDeCreation(new \DateTime());
            $entityManager->persist($ticket);
            $entityManager->flush();

            return $this->redirectToRoute('app_user_client_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('ticket/new.html.twig', [
            'ticket' => $ticket,
            'form' => $form,
        ]);
    }

    #[Route('/show/{id}', name: 'app_ticket_show', methods: ['GET'])]
    public function show(Ticket $ticket): Response
    {
        $user = $this->getUser();
        return $this->render('ticket/show.html.twig', [
            'user' => $user, 'ticket' => $ticket,
        ]);
    }

    #[Route('/edit/{id}', name: 'app_ticket_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Ticket $ticket, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $repository = $entityManager->getRepository(User::class);
        $username = $repository->findOneBy(['username' => $user->getUsername()]);
        $query = $repository->createQueryBuilder('u')
            ->where('u.codeAgent != :agent')
            ->setParameter('agent', 'New account')
            ->getQuery();
        $filteredData = $query->getResult();

        $form = $this->createForm(TicketType::class, $ticket, [ 'filtered_data' => $filteredData, ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (!empty($username)) { $ticket->setUsername($username); } else { $ticket->setUsername('Ticket_Client'); }
            $entityManager->flush();

            return $this->redirectToRoute('app_ticket_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('ticket/edit.html.twig', [
            'ticket' => $ticket,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_ticket_delete', methods: ['GET', 'POST'])]
    public function delete(Request $request, Ticket $ticket, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ticket->getId(), $request->request->get('_token'))) {
            $entityManager->remove($ticket);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_ticket_index', [], Response::HTTP_SEE_OTHER);
    }
}
