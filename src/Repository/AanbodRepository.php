<?php

namespace App\Repository;

use App\Entity\Aanbod;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Aanbod|null find($id, $lockMode = null, $lockVersion = null)
 * @method Aanbod|null findOneBy(array $criteria, array $orderBy = null)
 * @method Aanbod[]    findAll()
 * @method Aanbod[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AanbodRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Aanbod::class);
    }

    // /**
    //  * @return Aanbod[] Returns an array of Aanbod objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Aanbod
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
