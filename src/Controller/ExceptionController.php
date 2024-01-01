<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExceptionController extends AbstractController
{
    #[Route('/', name:"app_landing")]
    public function landing(): Response
    {
        return $this->render('landing.html.twig',[ ]);
    }

    /**
    * @Route("/error/{statusCode}", name="errorCode", requirements={"statusCode"="\d+"})
    */
    #[Route('/error/{statusCode}', name: 'errorCode', requirements: ['statusCode' => '\d+'])]
    public function showException($statusCode): Response
    {
        return $this->render('exception/' . $statusCode . '.html.twig', [
            'statusCode' => $statusCode,
        ]);
    }

    #[Route('/privacy_policy', name: 'privacy')]
    public function privacy()
    {
        return $this->render('privacy_policy.html.twig',['title' => 'Privacy Policy']);
    }

    #[Route('/termes/conditions', name: 'conditionEtTerme')]
    public function terme()
    {
        return $this->render('conditionEtTermes.html.twig',['title' => 'Conditions et Termes']);
    }
}
