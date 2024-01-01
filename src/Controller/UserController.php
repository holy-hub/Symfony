<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Ticket;
use App\Form\RegistrationFormType;
use App\Form\UserType;
use App\Form\UserTwoType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/admin/hghf455c4/dashboard/ohhyes', name: 'app_user_admin_index', methods: ['GET'])]
    public function index(entityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        // $agent = $entityManager->getRepository(User::class)->findBy(['codeAgent' => ['!=', 'New account'], 'manager' => $user->getManager() ]);
        $repository = $entityManager->getRepository(User::class);
        $query = $repository->createQueryBuilder('u')
            ->where('u.codeAgent != :codeAgent')
            ->andWhere('u.manager = :manager')
            ->setParameter('codeAgent', 'New account')
            ->setParameter('manager', $user->getManager())
            ->getQuery();
        $agents = $query->getResult();

        return $this->render('user/index.html.twig', [
            'user' => $user,
            'agents' => $agents,
        ]);
    }

    #[Route('/agent/hghcnhgn/4c5dr656v/dashboard/ohhyes', name: 'app_user_agent_index', methods: ['GET'])]
    public function indexAgent(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $repository = $entityManager->getRepository(Ticket::class);
        $query = $repository->createQueryBuilder('u')
            ->where('u.username != :agent')
            ->setParameter('agent', $user->getUsername())
            ->getQuery();
        $tickets = $query->getResult();

        return $this->render('user/indexAgent.html.twig', [
            'user' => $user,
            'tickets' => $tickets,
        ]);
    }

    #[Route('/client/hbchgcg543m/767btr/dashboard/ohhyes', name: 'app_user_client_index', methods: ['GET'])]
    public function indexClient(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $repository = $entityManager->getRepository(Ticket::class);
        $query = $repository->createQueryBuilder('u')
            ->where('u.username = :client')
            ->setParameter('client', $user->getUsername())
            ->getQuery();
        $tickets = $query->getResult();

        return $this->render('user/indexClient.html.twig', [
            'user' => $user,
            'tickets' => $tickets,
        ]);
    }

    #[Route('/jbhjb/jhjhbjh/new/jbjbbjbjkbk', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_user_admin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/ghfxgfxb/show/nwlsnckcaklcn/nlancl{id}k/bcccjbkch6736hjh36', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/edit/nwlkjcbhdbjhklcnwj/njnsnlancl{id}kbcc98ah/vhv56ch6736hjh36', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        // $form = $this->createForm(UserTwoType::class, $user);
        // $form->handleRequest($request);

        // if ($form->isSubmitted() && $form->isValid()) {
        //     $entityManager->flush();

        //     return $this->redirectToRoute('app_user_admin_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('user/edit.html.twig', [
        //     'user' => $user,
        //     'form' => $form,
        // ]);
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
        $u = $user->getUsername();
        $usern = $entityManager->getRepository(User::class)->findOneBy(['username' => $u, 'id' => $user->getId()]);
        $repo = $entityManager->getRepository(Ticket::class);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $user->setCodeAgent('New account');
            if ($usern) {
                $entities = $repo->createQueryBuilder('t')
                    ->where('t.username = :ticketUser')
                    ->setParameter('ticketUser', $u)
                    ->getQuery(); $entities->getResult();
                foreach ($entities as $entity) { $entity->setUsername($user->getUsername()); $entityManager->persist($entity); } }
            $entityManager->flush();
            // dd($user);
            return $this->redirectToRoute('retour', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('registration/register.html.twig', [
            'name' => 'Client',
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/nwlsnckcaklcnsjdnksbvhwjnjnsnlancl{id}kbcccjbkch6736hjh36', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }
        $user = $this->getUser()->getRoles();

        if ($user == 'ROLE_ADMIN') {
            return $this->redirectToRoute('app_user_admin_index', [], Response::HTTP_SEE_OTHER);
        } return $this->redirectToRoute('app_user_client_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/vbvbv/nb/table/bjbvjs74/vsj7887agent/kvsjfkb', name: 'app_table_view')]
    public function tableAgent(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $repository = $entityManager->getRepository(User::class);
        $query = $repository->createQueryBuilder('u')
            ->where('u.codeAgent != :codeAgent')
            ->andWhere('u.manager = :manager')
            ->setParameter('codeAgent', 'New account')
            ->setParameter('manager', $user->getManager())
            ->getQuery();
        $agents = $query->getResult();

        return $this->render('user/tableAgent.html.twig', ['agents' => $agents,]);
    }

    #[Route('/client/ticket', name: 'app_user_client_ticket')]
    public function clientTicket(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $tickets = $entityManager->getRepository(Ticket::class)->findby([
            'username' => $user,
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
            'agent' => $user,
        ]);

        return $this->render('ticket/index.html.twig', [
            'tickets' => $tickets,
        ]);
    }

    #[Route(name: 'retour')]
    public function retour(): Response
    {
        $user = $this->getUser();
        $roles = $user->getRoles();

        if (!$user) { return $this->redirectToRoute('landing'); }
        if (in_array('ROLE_CLIENT', $roles)) {
            return $this->redirectToRoute('app_user_client_index');
        } else if (in_array('ROLE_AGENT', $roles)) {
            return $this->redirectToRoute('app_user_agent_index');
        } else if (in_array('ROLE_ADMIN', $roles)) {
            return $this->redirectToRoute('app_user_admin_index');
        }
    }
}
