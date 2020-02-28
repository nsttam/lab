<?php

namespace App\Controller;
use App\Entity\Equipe;
use App\Entity\Joueur;
use Doctrine\ORM\EntityManagerInterface; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\EquipeType;
use Symfony\Component\HttpFoundation\Response;

/**
* @Route("/equipes", name="equipes")
*/


class EquipeController extends AbstractController
{
    /**
     * @Route("/index", name="equipe")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();
     

        $equipes = $entityManager->getRepository(Equipe::class)->findAll();

        return $this->render('equipe/index.html.twig', [
            'equipes' => $equipes,
        ]);
    }


/** 
     * @Route("/show/{id}", name="show") 
**/

    public function show($id){
        $em = $this->getDoctrine()->getManager(); //gestionnaire d'entité
        $equipe = $em->getRepository(Equipe::class)->find($id);
        //$joueurs = $em->getRepository(Joueur::class)->getJoueursEquipeByIdQB($id);
        $joueurs = $em->getRepository(Joueur::class)->getJoueursEquipeByIdDQL($id);
        $total = $em->getRepository(Joueur::class)->getNbJoueursEquipeByIdDQL($id);

        

        //$joueurs = $equipe->getJoueurs();
        return $this->render('equipe/show.html.twig', [
            'joueurs' => $joueurs,
            'equipe'=>$equipe,
            'total'=>$total
        ]);
    }


/** 
 * @Route("/addEquipe", name="addEquipe") 
**/

public function addEquipe(Request $request){
    $equipe = new Equipe();
    //$equipe->setNom("FCB");//form recupere donnes qui sont dans l'objet, si je donne nom, il preremplie le form
    $formEquipe = $this->createForm(EquipeType::class, $equipe); //accepte 2 parametres, l'estructure du formulaire et la valeur du formulaire
    $formEquipe->handleRequest($request); //on reemplace get

    if($request ->getMethod()=="POST"){
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($equipe);
        $entityManager->flush();
        return new Response('Element enregistré');
    }

    return $this->render('equipe/add.html.twig', [
        'formEquipe' => $formEquipe->createView()
        
    ]);

}
    
}
