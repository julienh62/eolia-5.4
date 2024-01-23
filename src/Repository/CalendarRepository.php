<?php

namespace App\Repository;

use App\Entity\Activity;
use App\Entity\Calendar;

use Psr\Log\LoggerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

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
    private LoggerInterface $logger;

    // Inject the logger in the constructor
    public function __construct(ManagerRegistry $registry, LoggerInterface $logger)
    {
        parent::__construct($registry, Calendar::class);
        $this->logger = $logger;
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
    ->andWhere('cat.activity = :isActivity') // Filtrer par la propriété activity
    ->setParameter('isActivity', true) 
    ->getQuery()
    ->getResult();
}
/**
 * @param string $categoryTitle The title of the category
 * @return Calendar[] Returns an array of Calendar objects for the specified category
 */
public function getElementsByCategoryTitle(string $categoryTitle)
{
    return $this->createQueryBuilder('element')
        ->leftJoin('element.category', 'category')
        ->where("category.title = :categoryTitle")
        ->setParameter('categoryTitle', $categoryTitle)
        ->orderBy("element.start", "desc")
        ->getQuery()
        ->getResult();
}


    /**
     * @return Calendar[] Returns an array of Calendar objects
     */
    public function getAllChar()
    {
        return $this->createQueryBuilder('char')
        ->leftJoin('char.category', 'charc') 
        ->where("charc.title = :charTitle")
        ->setParameter('charTitle', 'Char à voile')
          ->orderBy("char.start", "desc")
          ->getQuery()
          ->getResult()
       ;
    }


    /**
     * @return Calendar[] Returns an array of Calendar objects
     */
    public function getAllCatamaran()
    {
        return $this->createQueryBuilder('cata')
        ->leftJoin('cata.category', 'catac') 
        ->where("catac.title = :catamaranTitle")
        ->setParameter('catamaranTitle', 'Catamaran')
          ->orderBy("cata.start", "desc")
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
 * @return Calendar[] Returns an array of Calendar objects
 */
public function filter($filter, $min, $begin, $end, $category): array
{
    $conn = $this->getEntityManager()->getConnection();

    try {
        $conn->beginTransaction();

        $sql = 'SELECT cal.*, cc.title as category
                FROM calendar cal
                JOIN category cc ON cal.category_id = cc.id
                WHERE cal.start >= :begin
                AND cal.end <= :end
                AND cal.stock >= :min';

        $parameters = [
            'begin' => $begin,
            'end' => $end,
            'min' => $min,
        ];

        // Check if the category is 'all', if not, add category filter
        if ($category !== 'all') {
            $sql .= ' AND cc.title = :category';
            $parameters['category'] = $category;
        }
            // Before executing the query
dump($sql);
dump([
    'begin' => $begin,
    'end' => $end,
    'min' => $min,
    'category' => $category
]);

$stmt = $conn->executeQuery($sql, [
    'begin' => $begin,
    'end' => $end,
    'min' => $min,
    'category' => $category
]);

// ...

        $stmt = $conn->executeQuery($sql, $parameters);

        // Fetch the results as an associative array
        $results = $stmt->fetchAllAssociative();

        // Commit the transaction
        $conn->commit();

        return $results;

    } catch (\Doctrine\DBAL\Exception\DriverException $e) {
        // Log the error
        $this->logger->error('Database error: ' . $e->getMessage());

        // Roll back the transaction
        $conn->rollBack();

        // Re-throw the exception
        throw $e; 
    } catch (\Exception $e) {
        // Log the error
        $this->logger->error('An unexpected error occurred: ' . $e->getMessage());

        // Roll back the transaction
        $conn->rollBack();

        // Re-throw the exception
        throw $e;
    }
}





  /*  $sq = $this->createQueryBuilder('cal');

    $sq
    ->join('cal.category', 'cc')//jointure calendar avec entité category
   ->andWhere('cal.stock >= :min')
   ->andWhere('cal.start >= :begin')
   ->andWhere('cal.end <= :end')
    ->setParameter('min', $min )
    ->setParameter('begin', $begin )
    ->setParameter('end', $end);

    $sq->andWhere('cal INSTANCE OF App\Entity\Activity');



// Check if the category is 'all', if not, add category filter
if ($category !== 'all') {
    $sq->andWhere("cc.title = :category")
       ->setParameter('category', $category);
}


    if(array_key_exists($filter, $filters)){
        $sq->add("orderBy", ($filters[$filter]));
    }
    // dd($sq->getQuery()->getResult());
    return $sq->getQuery()->getResult();
} */

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