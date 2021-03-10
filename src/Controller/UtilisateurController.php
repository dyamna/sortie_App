<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Utilisateur;


class UtilisateurController extends AbstractController
{



    /**
     * @Route("/utilisateur/ajouter", name="utilisateur_ajouter")
     */
    public function add(EntityManagerInterface $em)
    {
        //@todo: traiter le formulaire...

        $utilisateur = new Utilisateur();

        $utilisateur->setPseudo("Sarko");
        $utilisateur->setNom("SARKOZY");
        $utilisateur->setPrenom("Nicolas");
        $utilisateur->setTelephone("0649831249");
        $utilisateur->setEmail("sarko@gmail.com");
        $utilisateur->setPassword("sswordP@");
        $utilisateur->setAdministrateur ("true");
        $utilisateur->setOrganisateur ("false");
        $utilisateur->setActif ("false");




        $em->persist($utilisateur);
        $em->flush();

        return $this->render('utilisateur/ajouter.html.twig');
    }

    /**
     * @Route("/login", name="login")
     */
public function login() {

        return $this->render("main/login.html.twig", [

        ]);
}


    /**
     * @Route("/logout", name="logout")
     */
public function logout(){}
}