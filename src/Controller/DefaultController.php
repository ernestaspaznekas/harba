<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return $this->render('Default/index.html.twig', []);
    }

    /**
     * @Route("/data", name="data")
     */
    public function dataAction()
    {
        return new JsonResponse();
    }
}
