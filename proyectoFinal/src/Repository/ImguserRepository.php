<?php

namespace App\Repository;

use App\Entity\Imguser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Imguser|null find($id, $lockMode = null, $lockVersion = null)
 * @method Imguser|null findOneBy(array $criteria, array $orderBy = null)
 * @method Imguser[]    findAll()
 * @method Imguser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImguserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Imguser::class);
    }

    // /**
    //  * @return Imguser[] Returns an array of Imguser objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Imguser
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
