<?php

namespace App\Repository;

use App\Entity\ImgUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ImgUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImgUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImgUser[]    findAll()
 * @method ImgUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImgUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImgUser::class);
    }

    // /**
    //  * @return ImgUser[] Returns an array of ImgUser objects
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
    public function findOneBySomeField($value): ?ImgUser
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
