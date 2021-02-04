<?php

namespace App\Repository;

use App\Entity\ImgProducto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ImgProducto|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImgProducto|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImgProducto[]    findAll()
 * @method ImgProducto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImgProductoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImgProducto::class);
    }

    // /**
    //  * @return ImgProducto[] Returns an array of ImgProducto objects
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
    public function findOneBySomeField($value): ?ImgProducto
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
