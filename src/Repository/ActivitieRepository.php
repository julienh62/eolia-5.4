<?php

namespace App\Repository;

use App\Entity\Activitie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Activitie>
 *
 * @method Activitie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Activitie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Activitie[]    findAll()
 * @method Activitie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActivitieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Activitie::class);
    }
    //obtenir le stock d'une activité donneé
    public function getStockById($id)
    {
        return $this->createQueryBuilder('a')
            ->select('a.stock')
            ->andWhere('a.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getSingleScalarResult();
    }

//    /**
//     * @return Activitie[] Returns an array of Activitie objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Activitie
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
