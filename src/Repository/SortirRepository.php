<?php

namespace App\Repository;

use App\Entity\Sortir;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Sortir>
 *
 * @method Sortir|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sortir|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sortir[]    findAll()
 * @method Sortir[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SortirRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sortir::class);
    }

//    /**
//     * @return Sortir[] Returns an array of Sortir objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Sortir
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
