<?php

namespace App\Repository;

use App\Entity\Joueur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Joueur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Joueur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Joueur[]    findAll()
 * @method Joueur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JoueurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Joueur::class);
    }

    public function getJoueursEquipeByIdQB($value) //Query Builder
    {
    return $this->createQueryBuilder('e') //constructeur de requete - e EST JOUEUR
        ->andWhere('e.equipe = :val')//SELECT EST IMPLICITE
        ->setParameter('val', $value)
        
        ->getQuery()
        ->getResult()
    ;
    }

    public function getJoueursEquipeByIdDQL($value) //DQL
    {
    //$entityManager=$this->getEntityManager();

    $query = $this->getEntityManager()
    ->createQuery('SELECT j from App\Entity\Joueur j WHERE j.equipe=:idEquipe') 
    ->setParameter('idEquipe', $value); //le parametre qu'on recoit, sera egal à idEquipe
    
    return $query->getResult();//On execute requet, equivalent flush - requete prepare
    }

    public function getNbJoueursEquipeByIdDQL($value) //DQL
    {
   

    $query = $this->getEntityManager()
    ->createQuery('SELECT count(j.id) from App\Entity\Joueur j WHERE j.equipe=:idEquipe') 
    ->setParameter('idEquipe', $value); //le parametre qu'on recoit, sera egal à idEquipe//on passe parametre à requete
    
    return $query->getSingleScalarResult();//resultat scalaire, un entier, pas de tableau
    }



 

    // /**
    //  * @return Joueur[] Returns an array of Joueur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Joueur
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
