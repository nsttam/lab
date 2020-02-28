<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Joueur;
use App\Entity\Equipe;
use App\Form\JoueurType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/joueurs", name="joueurs")
 */


class JoueurController extends AbstractController
{
    /**
     * @Route("/add", name="joueur")
     */
    public function index()
    {
        $e = new Equipe();
        $e->setNom("PSG");
        $e->setNbrJoueurs(23);
        $e->setSpecialite("Foot Ball");
        $e->setPays("France");

        $j = new Joueur();
        $j->setNom("Neymar");
        $j->setPrenom("Nom");
        $j->setNumero(10);
        $j->setAge(24);

        $j->setEquipe($e);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($e);
        $entityManager->persist($j);
        $entityManager->flush();

        $joueurs = $entityManager->getRepository(Joueur::class)->findAll();

        return $this->render('joueur/index.html.twig', [
            'joueurs' => $joueurs,
        ]);
    }


       /**
     * @Route("/addJoueur", name="addJoueur")
     */
    public function addJoueur(Request $request):Response
    {
    $joueur = new Joueur();
    //$equipe->setNom("FCB");//form recupere donnes qui sont dans l'objet, si je donne nom, il preremplie le form
    //$formJoueur = $this->createForm(JoueurType::class, $joueur); //accepte 2 parametres, l'estructure du formulaire et la valeur du formulaire
    $formJoueur= $this->createForm(JoueurType::class, $joueur); //créer un formulaire avec les données stockées dans l'objet si c'est new ça marche mais  on pourrait faire
    //setNom('OM') et ça le mettrait de base ;)
    $formJoueur->handleRequest($request);
    if($request ->getMethod()=="POST"){
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($joueur);
        $entityManager->flush();

        return new Response("Element enregistré");
    }
    return $this->render('joueur/add.html.twig', [
        'formJoueur'=> $formJoueur->createView()
    ]);

    return $this->render('joueur/add.html.twig', [
        'formJoueur' => $formJoueur->createView()
        
    ]);
  
    }
}

