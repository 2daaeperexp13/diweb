<?php

namespace App\Repository;

use App\Entity\Imgproducto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Imgproducto|null find($id, $lockMode = null, $lockVersion = null)
 * @method Imgproducto|null findOneBy(array $criteria, array $orderBy = null)
 * @method Imgproducto[]    findAll()
 * @method Imgproducto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImgproductoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Imgproducto::class);
    }

    // /**
    //  * @return Imgproducto[] Returns an array of Imgproducto objects
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
    public function findOneBySomeField($value): ?Imgproducto
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
