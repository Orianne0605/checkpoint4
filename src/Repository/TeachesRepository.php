<?php

namespace App\Repository;

use App\Entity\Teaches;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Teaches|null find($id, $lockMode = null, $lockVersion = null)
 * @method Teaches|null findOneBy(array $criteria, array $orderBy = null)
 * @method Teaches[]    findAll()
 * @method Teaches[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TeachesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Teaches::class);
    }

    // /**
    //  * @return Teaches[] Returns an array of Teaches objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Teaches
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
