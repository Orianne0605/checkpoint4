<?php

namespace App\Repository;

use App\Entity\Earnings;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Earnings|null find($id, $lockMode = null, $lockVersion = null)
 * @method Earnings|null findOneBy(array $criteria, array $orderBy = null)
 * @method Earnings[]    findAll()
 * @method Earnings[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EarningsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Earnings::class);
    }

    // /**
    //  * @return Earnings[] Returns an array of Earnings objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Earnings
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
