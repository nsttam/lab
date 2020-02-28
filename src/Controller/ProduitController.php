<?php

namespace App\Controller;

use App\Entity\Produit; //pour que sf sache ce qu'on a dans l'entity
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\HttpFoundation\Request; 
use Doctrine\ORM\EntityManagerInterface; //interface qui permet la création de l'entitymanager

class ProduitController extends AbstractController 
{
    /**
     * @Route("/produit", name="produit") //
     */
    public function index()
    {
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    /** 
     * * @Route("/addproduit", name="addproduit") 
     * */
    public function createProduit(): Response { 
       $entityManager = $this->getDoctrine()->getManager(); //gestionnaire d'entité
       $product = new Produit(); //création d'un object vide
       $product->setLibelle('Smart Phone'); //on màj ses info (avec les setters)
       $product->setPrix(350); 
       $product->setDescription('un samsung J7!'); 
       //on met pas l'id, symfony va s'en occuper tout seul
       $entityManager->persist($product); //créer le code sql d'insertion ou MàJ
       $entityManager->flush(); //exécute le code sql
       return new Response('Saved new product with id '.$product->getId()); 
    }


    /** 
     * * @Route("/listproduit", name="listproduit") 
     * */

    public function listProduit() { 
        $em = $this->getDoctrine()->getManager(); //gestionnaire d'entité
        $produits = $em->getRepository(Produit::class)->findAll();


        return $this->render('produit/list.html.twig', [
            'produits' => $produits,
        ]);
     }


     /** 
     * * @Route("/showproduit/{id}", name="showproduit") 
     * */

    public function showProduit($id) { 
        $em = $this->getDoctrine()->getManager(); //gestionnaire d'entité
        $produit = $em->getRepository(Produit::class)->find($id);


        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
        ]);
     }





    /** 
     * * @Route("/deleteproduit/{id}", name="deleteproduit") 
     * */
    public function deleteProduit($id): Response { 
        $entityManager = $this->getDoctrine()->getManager(); //gestionnaire d'entité
       
        $produit = $entityManager->getRepository(Produit::class)->find($id);
        $entityManager->remove($produit);
        $entityManager->flush(); //exécute le code sql
        return $this->redirectToRoute('listproduit');
        
     }


     /** 
     * * @Route("/addFormProduit", name="formAjout") 
     * */

     public function addFormProduit(Request $request){
         //Si je recois uine request, j'insere, sinon je retourne form vierge

        if ($request->getMethod()=="POST"){
            //return new Response("On est dans le bloc insertion");
            $produit = new Produit();

            $libelle = $request->get('libelle');
            $prix = $request->get('prix');
            $description = $request->get('description');

            $produit->setLibelle($libelle);
            $produit->setPrix($prix);
            $produit->setDescription($description);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($produit); //créer le code sql d'insertion ou MàJ
            $entityManager->flush(); //exécute le code sql
            return $this->redirectToRoute('listproduit');

        }

        return $this->render('produit/addFormProduit.html.twig');

     }

     /** 
     * * @Route("/updateProduit/{id}", name="updateProduit") 
     * */

     public function updateProduit($id){
        $entityManager = $this->getDoctrine()->getManager();
        $produit = $entityManager->getRepository(Produit::class)->find($id);

        
       return $this->render('produit/updateForm.html.twig', [
           'produit'=>$produit,
       ]);
        
    }

     /** 
     * * @Route("/updateInsertProduit", name="updateInsertProduit") 
     * */

    public function updateInsertProduit(Request $request){
        $entityManager = $this->getDoctrine()->getManager();
        $produit = $entityManager->getRepository(Produit::class)->find($request->get('idprod'));
        $produit->setLibelle($request->get('libelle'));
        $produit->setPrix($request->get('prix'));
        $produit->setDescription($request->get('description'));

        $entityManager->persist($produit); //créer le code sql d'insertion ou MàJ
            $entityManager->flush(); //exécute le code sql


        
       return $this->redirectToRoute('listproduit');
        
    }



}
?>