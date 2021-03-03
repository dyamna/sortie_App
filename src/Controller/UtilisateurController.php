<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UtilisateurController extends AbstractController
{
    /**
     * @Route("/utilisateur", name="utilisateur")
     */
    public function index(): Response
    {
        return $this->render('utilisateur/index.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }


    /**
     * @Route("/utilisateur/ajouter", name="utilisateur_ajouter")
     */
    public function add(EntityManagerInterface $em)
    {
        //@todo: traiter le formulaire...

        $utilisateur = new Utilisateur();
        $utilisateur->setNom("BRUNI");
        $utilisateur->setPrenom("Carla");
        $utilisateur->setTelephone("0649831259");
        $utilisateur->setMail("carla@gmail.com");
        $utilisateur->setMotPasse("P@ssword");

        $em->persist($utilisateur);
        $em->flush();

        return $this->render('utilisateur/add.html.twig');
    }

}