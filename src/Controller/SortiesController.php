<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SortiesController extends AbstractController
{
    /**
     * @Route("/sorties", name="sorties")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/SortiesController.php',
        ]);
    }


/**
 * @Route("/monprofil", name="sorties_monprofil")
 */
public function monprofil() {
    return $this ->render('/monprofil.html.twig');
}
}