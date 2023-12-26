<?php

namespace App\Repository;

use App\Entity\Purchase;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Purchase>
 *
 * @method Purchase|null find($id, $lockMode = null, $lockVersion = null)
 * @method Purchase|null findOneBy(array $criteria, array $orderBy = null)
 * @method Purchase[]    findAll()
 * @method Purchase[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PurchaseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Purchase::class);
    }

    public function save(Purchase $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Purchase $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }


    //permet de recuperer les commandes concernant une session calendar donnée
//permet de recuperer les commandes concernant une session calendar donnée
 /*   public function findPurchaseDetailsSql($id)
    {

        // Obtient une connexion à la base de données
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
        SELECT c.start, c.end FROM calendar c JOIN purchase_item pi ON c.id = pi.calendar_id JOIN purchase p ON pi.purchase_id = p.id WHERE p.id = :id;
            ';

        $resultSet = $conn->executeQuery($sql, ['id' => $id]);

        // Renvoie un tableau de tableaux (ensemble de données brutes)
        return $resultSet->fetchAllAssociative();

        // print permet ici afficher ensuite les dd
        //   print_r($purchaseDetails);

    }*/

    //permet de recuperer les commandes concernant une session calendar donnée
    public function findPurchaseDetails($id)
    {
        $qb = $this->createQueryBuilder('p')

            ->select('c.start, c.end')
            ->join('p.purchaseItems', 'pi') // jointure entre Purchase et PurchaseItem
            ->join('pi.calendar', 'c') // jointure entre PurchaseItem et Calendar
          //  ->join('p.user', 'u') // jointure entre Purchase et User
            ->andWhere('p.id = :id') // condition pour le nom complet de l'utilisateur
            ->setParameter('id', $id);

        return $qb->getQuery()->getArrayResult();
    }
    public function findAllPurchaseUserObjet($fullName)
    {
        return $this->createQueryBuilder('p')
            ->join('p.purchaseItems', 'pi') // jointure entre Purchase et PurchaseItem
            ->join('pi.calendar', 'c') // jointure entre PurchaseItem et Calendar
            ->join('p.user', 'u') // jointure entre Purchase et User
            ->andWhere('u.fullName = :fullName')
            ->setParameter('fullName', $fullName)
            ->getQuery()
            ->getResult(); // ou getSingleResult() si vous attendez un seul résultat
    }



    //recuperer les quantité commandées, nom et quantité
// pour un calendrier donné
    public function findAllPurchaseUser($fullName)
    {

        $qb = $this->createQueryBuilder('p')
            ->select('c.start, c.end, c.title, u.fullName, pi.quantity, pi.id, p.total, p.status')
            ->join('p.purchaseItems', 'pi') // jointure entre Purchase et PurchaseItem
            ->join('pi.calendar', 'c') // jointure entre PurchaseItem et Calendar
            ->join('p.user', 'u') // jointure entre Purchase et User
            ->andWhere('u.fullName = :fullName') // condition pour le nom complet de l'utilisateur
            ->setParameter('fullName', $fullName);

        return $qb->getQuery()->getResult();


    }



    /*//permet de recuperer les commandes concernant une session calendar donnée
        public function findPurchaseDetailsid($id)
        {

        // Obtient une connexion à la base de données
            $conn = $this->getEntityManager()->getConnection();

            $sql = '
            SELECT c.start, c.end FROM calendar c JOIN purchase_item pi ON c.id = pi.calendar_id JOIN purchase p ON pi.purchase_id = p.id WHERE p.id = :id;
                ';

            $resultSet = $conn->executeQuery($sql, ['id' => $id]);

            // Renvoie un tableau de tableaux (ensemble de données brutes)
            return $resultSet->fetchAllAssociative();

        // print permet ici afficher ensuite les dd
         //   print_r($purchaseDetails);

      } */



  //permet de recuperer les commandes concernant un user donné
 /* public function findAllPurchaseUser($fullName)
  {

  // Obtient une connexion à la base de données
      $conn = $this->getEntityManager()->getConnection();

      $sql = '
      SELECT c.start, c.end, c.title, u.full_name,  pi.quantity, pi.id, p.total, p.created_at, p.status
FROM purchase p
JOIN purchase_item pi ON p.id = pi.purchase_id
JOIN calendar c ON pi.calendar_id = c.id
JOIN user u ON p.user_id = u.id
WHERE u.full_name = :fullName;
          ';

      $resultSet = $conn->executeQuery($sql, ['fullName' => $fullName]);

      // Renvoie un tableau de tableaux (ensemble de données brutes)
      return $resultSet->fetchAllAssociative();

  // print permet ici afficher ensuite les dd
   //   print_r($purchaseDetails);

}*/










//permet de recuperer les commandes concernant un user donné
  /*  public function findAllPurchaseUserid($id)
    {

        // Obtient une connexion à la base de données
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
      SELECT c.start, c.end, c.title, c.id, pi.quantity, p.total, p.created_at, p.status
FROM purchase p
JOIN purchase_item pi ON p.id = pi.purchase_id
JOIN calendar c ON pi.calendar_id = c.id
JOIN user u ON p.user_id = u.id
WHERE u.id = :id;
          ';

        $resultSet = $conn->executeQuery($sql, ['id' => $id]);

        // Renvoie un tableau de tableaux (ensemble de données brutes)
        return $resultSet->fetchAllAssociative();

        // print permet ici afficher ensuite les dd
        //   print_r($purchaseDetails);

    }
*/
  /*  public function deletePurchasesForUserAndCalendarId($fullName, $calendarId)
    {
        return $this->createQueryBuilder('p')
            ->delete()
            ->where('p.fullName = :fullName')
            ->andWhere('p.calendarId = :calendarId')
            ->setParameter('fullName', $fullName)
            ->setParameter('calendarId', $calendarId)
            ->getQuery()
            ->execute();
    }*/






//    /**
//     * @return Purchase[] Returns an array of Purchase objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Purchase
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
