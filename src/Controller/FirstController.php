<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FirstController extends AbstractController
{
    public function userID()
    {
        $id = random_int(0, 100);
        return new Response(
            '<html><body> Votre ID est : '.$id.'</body></html>'
        );
    }

    public function formation($formation, $numero)
    {
        
        
        return new Response(
            '<html><body><h1 align=center>Hello World '.$formation.' Numero: '.$numero.'</h1></body></html>'
        );
    }

   /**
    * @Route("/first/index")
    */
    public function index()
    {
        
        return new Response(
            '<html><body><h1 align=center>Hello Symfony</h1></body></html>'
        );
    }

   /**
    * @Route("/first/affichage")
    */
   
    public function affichage()
    {
        $noms = array("Alain", "Victor", "Vincent");
        $candidats = array(
           array("id"=>"1", "nom"=>"Toto", "prenom"=>"T"),
           array("id"=>"2", "nom"=>"Lala", "prenom"=>"L")
       );

        $formation="Symfony";
        $lieu="Lyon";
        $date="25/02/2020";
        return $this->render('first/affichage.html.twig', [
            'formation'=>$formation, 
            'lieu'=>$lieu, 
            'date'=>$date,
            'noms'=>$noms,
            'candidats'=>$candidats 
        ]);

    }
    

    /**
    * @Route(path="/first/affichageGk", name="formationGk")
    */
    public function formationGk()
    {
        
        
        return $this->render("first/formationGk.html.twig");
    }

     /**
    * @Route(path="/first/infoFormateur", name="infoFormateur")
    */
    public function infoFormateur()
    {
        
        
        return $this->render("first/infoFormateur.html.twig");
    }

     /**
    * @Route(path="/first/infoCandidats", name="infoCandidats")
    */
    public function infoCandidats()
    {
        
        
        return $this->render("first/infoCandidats.html.twig");
    }
   
    /**
    * @Route(path="/first/showDetailsCandidat/{id}", name="showDetailsCandidat")
    */
    public function showDetailsCandidat($id){

        return new Response(
            "candidat:".$id
        );

    }


}
