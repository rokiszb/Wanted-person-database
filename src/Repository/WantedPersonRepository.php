<?php

namespace App\Repository;

use App\Entity\WantedPerson;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method WantedPerson|null find($id, $lockMode = null, $lockVersion = null)
 * @method WantedPerson|null findOneBy(array $criteria, array $orderBy = null)
 * @method WantedPerson[]    findAll()
 * @method WantedPerson[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WantedPersonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WantedPerson::class);
    }

    // /**
    //  * @return WantedPerson[] Returns an array of WantedPerson objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WantedPerson
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
