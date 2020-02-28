<?php
namespace App\Controller;

use App\Entity\Commande; //pour que sf sache ce qu'on a dans l'entity
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response; 
use Doctrine\ORM\EntityManagerInterface; //interface qui permet la création de l'entitymanager

class CommandeController extends AbstractController
{
    /**
     * @Route("/commande", name="commande")
     */
    public function index()
    {
        return $this->render('commande/index.html.twig', [
            'controller_name' => 'CommandeController',
        ]);
    }

    /** 
     * * @Route("/addcommande", name="addcommande") 
     * */
    public function createCommande(): Response { 
        
        $commande = new Commande(); //création d'un object en memoire
        $commande->setReference('Commande1'); //on màj ses info (avec les setters)
        $commande->setPrix(35); 
        //on met pas l'id, symfony va s'en occuper tout seul
        $entityManager = $this->getDoctrine()->getManager(); //gestionnaire d'entité
        $entityManager->persist($commande); //créer le code sql d'insertion ou MàJ
        $entityManager->flush(); //exécute le code sql

        return $this->render('commande/index.html.twig', [
            'commande' => $commande,
        ]);

        //return new Response('Saved new commande with id '.$commande->getId()); 
     }
}
