<?php

namespace App\Repository;

use App\Entity\Messages;
use App\Entity\Contacts;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\Expr\Comparison;

/**
 * @method Messages|null find($id, $lockMode = null, $lockVersion = null)
 * @method Messages|null findOneBy(array $criteria, array $orderBy = null)
 * @method Messages[]    findAll()
 * @method Messages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MessagesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Messages::class);
    }

    /**
     * Messages 
     * @return Messages[] Retourne un tableau d'objets messages 
    */
    
    public function findMessagesLu()
    {
        $qb = $this->createQueryBuilder('m');
        $qb
            ->select('m.id', 'm.titre', 'm.date', 'm.resume', 'm.status')
            ->where('m.status =:status ')
            ->setParameter('status', '1')
            ->setMaxResults(5)
            ->orderBy('m.titre', 'ASC');

        return $qb->getQuery()->getResult();
    }

    /**
     * @return Messages[] 
     * Retourne un tableau d'objets d'messages
    */
    
    public function findMessages()
    {
        $qb = $this->createQueryBuilder('m');
        $qb

            ->innerJoin('App\Entity\Contacts',  'c', 'WITH', 'c = m.contacts')
           // ->select('m.id', 'm.titre', 'm.date', 'm.resume', 'm.status')
            ->where('m.status =:status ')
            ->setParameter('status', '1')
         //   ->setMaxResults(5)
            ->orderBy('m.titre', 'ASC');
        return $qb->getQuery()->getResult();
    }
    
    /**
    * @return Messages[] 
    * Retourne un tableau d'objets messages
    */
    
    public function findByMessagesOne()
    {
        $qb = $this->createQueryBuilder('m');
        $qb

            ->innerJoin('App\Entity\Contacts',  'c', 'WITH', 'c = m.contacts')
           // ->select('m.id', 'm.titre', 'm.date', 'm.resume', 'm.status')
            ->where('m.status =:status ')
            ->setParameter('status', '1')
            ->andWhere('c.nom like :nom')
            ->setParameter('nom', 'Nabi')
         //   ->setMaxResults(5)
            ->orderBy('m.titre', 'ASC');
        return $qb->getQuery()->getResult();
    }

    /**
    * @return Messages[] 
    * Retourne un tableau d'objets messages
    */
        public function findMessagesOneContacts2()
    {
        $qb = $this->createQueryBuilder('m');
        $qb
            ->innerJoin('App\Entity\Contacts',  'c', 'WITH', 'c = m.contacts')
            ->where(
                    $qb->x()->eq('m.status =:status '),
                  //  $qb->x()->like('c.nom', 'nabi')
                    $qb->x()->like('c.nom', ':nom')
                    ->setParameter('status', '1')
                    ->setParameter('nom', 'Nabi')
            )
            ->orderBy('m.titre', 'ASC');
        return $qb->getQuery()->getResult();
    }

    /**
     * @return Messages[] Returns an array of Messages objects
     * Liste des messages du  Contacts XXXXXXX
     */
    public function findMessagesContacts()
    {
        return $this->createQueryBuilder('m')
        ->innerJoin('App\Entity\Contacts',  'c', 'WITH', 'c = m.contacts')
            ->Where('m.contacts = 6')
            ->getQuery()
            ->getResult();
    }

//Comment faire des jointures avec le QueryBuilder ?
// Depuis le repository d'messages
public function getMessagesAvecCommentaires()
{
  $qb = $this->createQueryBuilder('m')
             ->leftJoin('m.contacts', 'c')
             ->addSelect('c');
  return $qb->getQuery()
            ->getResult();
}

// /**
    //  * @return Messages[] Returns an array of Messages objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Messages
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

    