<?php

namespace App\Repository;

use App\Entity\Calendar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Calendar>
 *
 * @method Calendar|null find($id, $lockMode = null, $lockVersion = null)
 * @method Calendar|null findOneBy(array $criteria, array $orderBy = null)
 * @method Calendar[]    findAll()
 * @method Calendar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CalendarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Calendar::class);
    }

    public function save(Calendar $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Calendar $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }


 /**
     *  @return Calendar[] Returns an array of Calendar objects
     */
    public function getById($id){
        return $this->createQueryBuilder('s')
            ->where('s.id = :id' )
          ->setParameter('id', $id)
            ->getQuery()
            ->getResult()
            ;

    }


    public function getStock($id)
    {
        $qb = $this->createQueryBuilder('p')
            ->select('p.stock')
            ->where('p.id = :id')
            ->setParameter('id', $id);

        $result = $qb->getQuery()->getOneOrNullResult();

        return $result['stock'] ?? null;
    }



 
//    /**
//     * @return Calendar[] Returns an array of Calendar objects
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

//    public function findOneBySomeField($value): ?Calendar
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

 /**
     * @return Calendar[] Returns an array of Calendar objects
     */
 /*   public function getAllChar()
    {
        return $this->createQueryBuilder('s')
          ->where("s.category = 1 ")
          ->orderBy("s.start", "desc")
          ->getQuery()
          ->getResult()
       ;
    }

/**
     * @return Calendar[] Returns an array of Calendar objects
     */
  /*  public function getAll()
    {
    
        return $this->createQueryBuilder('s')
          ->orderBy("s.start", "desc")
          ->getQuery()
          ->getResult()
       ;
    }
*/


public function getAllCharCataKid()
{
    return $this->createQueryBuilder('s')
        ->where("s.category = 1 OR s.category = 2 OR s.category = 3")
        ->orderBy("s.start", "desc")
        ->getQuery()
        ->getResult()
    ;
}
//filtre tous calendars qui sont des activités
public function getAllCalendarActivitie()
{
    return $this->createQueryBuilder('c')
    ->leftJoin('c.category', 'cat') 
    ->orderBy('c.start', 'desc') 
    ->andWhere('cat.activitie = :isActivitie') // Filtrer par la propriété activitie
    ->setParameter('isActivitie', true) 
    ->getQuery()
    ->getResult();
}


    /**
     * @return Calendar[] Returns an array of Calendar objects
     */
    public function getAllChar()
    {
        return $this->createQueryBuilder('s')
          ->where("s.category = 1 ")
          ->orderBy("s.start", "desc")
          ->getQuery()
          ->getResult()
       ;
    }


    /**
     * @return Calendar[] Returns an array of Calendar objects
     */
    public function getAllCatamaran()
    {
        return $this->createQueryBuilder('s')
          ->where("s.category = 2 ")
          ->orderBy("s.start", "desc")
          ->getQuery()
          ->getResult()
       ;
    }

    /**
     * @return Calendar[] Returns an array of Calendar objects
     */
    public function getAllCharKid()
    {
    
        return $this->createQueryBuilder('s')
          ->where("s.category = 3 ")
          ->orderBy("s.start", "desc")
          ->getQuery()
          ->getResult()
       ;
    }

    /**
 * @return Calendar[] Returns an array of Product objects
 */
public function filter($filter, $min, $begin, $end, $category): array
{
    $filters = [
        'price_desc' => "p.price desc",
        'price_asc' => "p.price asc",
    ];
    $sq = $this->createQueryBuilder('p');

    $sq
    ->join('p.category', 'pc')//jointure avec entité category
    ->andWhere('p.stock >= :min')
    ->andHaving('p.start >= :begin')
    ->andHaving('p.end <= :end')
    ->setParameter('min', $min )
    ->setParameter('begin', $begin )
    ->setParameter('end', $end);

// Check if the category is 'all', if not, add category filter
if ($category !== 'all') {
    $sq->andWhere("pc.title = :category")
       ->setParameter('category', $category);
}


    if(array_key_exists($filter, $filters)){
        $sq->add("orderBy", ($filters[$filter]));
    }
    // dd($sq->getQuery()->getResult());
    return $sq->getQuery()->getResult();
}

    /**
     * @return array|null Returns an array containting picture and price or null
     */
    public function getCategoryPictureAndPrice($id): ?array
    {
        $queryBuilder = $this->createQueryBuilder('c');

        $result = $queryBuilder
            ->join('c.category', 'cc') // Jointure avec l'entité Category
            ->join('cc.categoryColorSettings', 'ccc') // Jointure avec l'entité CategoryColorSettings
            ->select('ccc.picture, ccc.price') // Sélectionner les propriétés picture et price
            ->where('c.id = :calendarId')
            ->setParameter('calendarId', $id)
            ->setMaxResults(1) // Assurez-vous d'obtenir une seule image
            ->getQuery()
            ->getOneOrNullResult();

        return $result;
    }

    public function findOneByPriceModified($id): ?Calendar
    {
        return $this->createQueryBuilder('c')
            ->select('c')
            ->where('c.id = :calendarId')
            ->setParameter('calendarId', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }
    

/**
     * @return Calendar[] Returns an array of Product objects
     */
  /*  public function filterCategory($category): array
    {
     
        $sq = $this->createQueryBuilder('p');

        $sq
        ->join('p.category', 'c')
            ->andWhere("c.category = :category ")
         
          
            ->setParameter('category', $category);
        
        // dd($sq->getQuery()->getResult());
        return $sq->getQuery()->getResult();

    }*/

}