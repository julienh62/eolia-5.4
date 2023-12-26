<?php

namespace App\Repository;

use App\Entity\CategoryColorSetting;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CategoryColorSetting>
 *
 * @method CategoryColorSetting|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoryColorSetting|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoryColorSetting[]    findAll()
 * @method CategoryColorSetting[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryColorSettingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategoryColorSetting::class);
    }

    public function getDefaultPrice($id): ?int
    {
        $queryBuilder = $this->createQueryBuilder('c');

        $result = $queryBuilder
            ->select('c.price')
            ->where('c.id = :calendarId')
            ->setParameter('calendarId', $id)
            ->setMaxResults(1) // Assurez-vous d'obtenir un seul résultat
            ->getQuery()
            ->getOneOrNullResult()
        ;

        // $result sera null si aucun calendrier correspondant à l'ID n'est trouvé
        return $result ? $result['price'] : null;
    }


//    /**
//     * @return CategoryColorSetting[] Returns an array of CategoryColorSetting objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CategoryColorSetting
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
