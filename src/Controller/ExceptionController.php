<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExceptionController extends AbstractController
{
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
}
