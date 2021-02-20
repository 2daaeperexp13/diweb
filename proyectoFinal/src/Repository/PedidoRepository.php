<?php

namespace App\Repository;

use App\Entity\Pedido;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\ParameterType;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Pedido|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pedido|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pedido[]    findAll()
 * @method Pedido[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PedidoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pedido::class);
    }


    public function unidadesProducto($productos,$pedido){
        $conn = $this->getEntityManager()->getConnection();
        for ($i=0; $i < count($productos); $i++) { 
            $producto=$productos[$i];
            $sql= 'UPDATE  producto_pedido SET unidades= :unidades WHERE producto_id = :id AND pedido_id =:pedido';
            $stmt=$conn->prepare($sql);
        
            $stmt->bindParam("unidades",$producto['cantidad'],ParameterType::INTEGER);
            $stmt->bindParam("id",$producto['id'],ParameterType::INTEGER);
            $stmt->bindParam("pedido",$pedido);

            $stmt->execute();
        }
    }

    // /**
    //  * @return Pedido[] Returns an array of Pedido objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pedido
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
