<?php

namespace App\Repository;

use App\Entity\PurchaseItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\DBAL\Connection;

/**
 * @extends ServiceEntityRepository<PurchaseItem>
 *
 * @method PurchaseItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method PurchaseItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method PurchaseItem[]    findAll()
 * @method PurchaseItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PurchaseItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PurchaseItem::class);
    }

    public function save(PurchaseItem $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PurchaseItem $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }


    //recupere la quantitté de toutes les  commandes d'un calendrier
    public function getPurchaseQuantitySum($id)
     {
      return $this->createQueryBuilder('p')
       ->select('SUM(p.quantity) as quantity')
       ->andWhere('p.activity = :id')         
       ->setParameter('id', $id)
        ->getQuery()
        ->getSingleResult()
    ;
     }
    //recupere la quantitté de toutes les  commandes d'un calendrier d'un user
  /* public function getPurchaseQuantitySum($id)
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
        SELECT SUM(`quantity`) FROM `purchase_item` WHERE `activitie_id` = :id;
            ';

        $resultSet = $conn->executeQuery($sql, ['id' => $id]);

        // returns an array of arrays (i.e. a raw data set)
        return $resultSet->fetchAllAssociative();
/*
        $query = $this->getEntityManager()->createQuery("SELECT SUM(quantity) FROM App\Entity\PurchaseItem WHERE activity.id = $id
    ");
 //  return $query->getResult();
 print_r ($query->getResult());*/
   // } 


 /* public function getPurchaseUsers($id)
    {

        //recuperer les quantité commandées, nom et quantité d'un utilisateur donné pour un calendrier donné
        $conn = $this->getEntityManager()->getConnection();
        $sql = '
        SELECT pi.purchase_id, u.full_name, pi.quantity 
        FROM purchase_item pi 
        JOIN purchase p ON pi.purchase_id = p.id 
        JOIN user u ON p.user_id = u.id 
        WHERE pi.activitie_id = :id

            ';

        $resultSet = $conn->executeQuery($sql, ['id' => $id]);

        // returns an array of arrays (i.e. a raw data set)
        return $resultSet->fetchAllAssociative();  
     }   
*/ //recuperer les quantité commandées, nom et quantité
// pour un calendrier donné
   public function getPurchaseCalendar($id)
   {

       $qb = $this->createQueryBuilder('pi')
          //->select('pi.purchase.id, user.fullName, pi.quantity')
         
           ->join('pi.purchase', 'p1') // jointure entre purchaseitem et purchase
           ->join('p1.user', 'u')//jointure entr purchase et user
           ->andWhere('pi.activity = :id')
           ->setParameter('id', $id);

       //dd($qb);
       return $qb->getQuery()->getResult();


   }

 //recuperer les quantité commandées, nom et quantité pur un user donné
// pour un calendrier donné
    public function getPurchaseActivitieUser($id)
    {
        $qb = $this->createQueryBuilder('pi')
            //->select('pi.purchase.id, user.fullName, pi.quantity')
            ->select('pi.quantity')
            ->join('pi.purchase', 'p1') // jointure entre purchaseitem et purchase
            ->join('p1.user', 'u')//jointure entr purchase et user
            ->andWhere('pi.activity = :id')
            ->andWhere('u.id = :id')
            ->setParameter('id', $id);
          //  ->setParameter('userId', $userId);
        //dd($qb);
        return $qb->getQuery()->getResult();


    }


public function deletePurchaseUsers($id, $userId)
{
    $conn = $this->getEntityManager()->getConnection();

    try {
        $conn->beginTransaction();

        $email = 'john doe';
        // Récupérer les informations sur les produits de la commande supprimée
        //$sql = 'SELECT activitie_id, quantity FROM `purchase_item` WHERE `purchase_id` = :id';
    /*   $sql = 'DELETE pi
FROM `purchase_item` pi
JOIN purchase p ON pi.purchase_id = p.id
JOIN user u ON p.user_id = u.id
WHERE pi.activitie_id = :id
   ';*/

       
       // $purchaseItems = $conn->executeQuery($sql, ['id' => $id])->fetchAll();
   //     $purchaseItems = $conn->executeQuery($sql, ['id' => $id, 'email' => $email])->fetchAll();

        // Mettre à jour le stock des produits
   //     foreach ($purchaseItems as $purchaseItem) {
    //        $activitieId = $purchaseItem['activitie_id'];
     //       $quantity = $purchaseItem['quantity'];

           // Récupérer la quantité en stock actuelle du produit
     //   $sql = 'SELECT stock FROM `Activity` WHERE `id` = :activitieId';
    //    $currentStock = $conn->executeQuery($sql, ['activitieId' => $activitieId])->fetchOne();


            // Mettre à jour le stock en soustrayant la quantité commandée
     //       $newStock = $currentStock + $quantity;

            // Mettre à jour le stock du produit dans la base de données
     //       $sql = 'UPDATE `Activity` SET `stock` = :newStock WHERE `id` = :activitieId';
      //      $conn->executeQuery($sql, ['newStock' => $newStock, 'activitieId' => $activitieId]);
    //    }

        // Suppression des enregistrements dans purchase_item
    //$sql = 'DELETE FROM `purchase_item` WHERE `purchase_id` = :id';
         $sql = 'DELETE pi
FROM `purchase_item` pi
JOIN purchase p ON pi.purchase_id = p.id
JOIN user u ON p.user_id = u.id
WHERE pi.activitie_id = :id
   ';

       // $conn->executeQuery($sql, ['id' => $id]);
      $conn->executeQuery($sql, ['id' => $id, 'user' => $userId])->fetchAllAssociative();
     //  JOIN user u ON p.user_id = u.' à la ligne 2
     
        // Commit de la transaction
        $conn->commit();
    } catch (\Exception $e) {
        // En cas d'erreur, annuler la transaction
        $conn->rollBack();
        throw $e; // Vous pouvez gérer l'erreur ici selon vos besoins
    }

}

    public function deletePurchaseUsersh($id,$userId)
    {
        $queryBuilder = $this->_em->createQueryBuilder(pi)
       // $qb = $this->createQueryBuilder('pi')
      //   $queryBuilder->delete(Purchaseitem::class, 'pi')
            //  ->delete(PurchaseItem::class,'pi');
           //   ->from(PurchaseItem::class, 'pi')

            ->join('pi.purchase', 'p') // jointure entre purchaseitem et purchase
            ->join('p.user', 'u')//jointure entr purchase et user
            ->andWhere('pi.activity = :id')
            ->andWhere('u.id = :id')
           ->setParameter('userId', $userId)
           ->setParameter('id', $id);

   // dd($qbgetQuery());
        $query = $queryBuilder->getQuery();

        return $query->execute();

    //return $qb->getQuery()->getResult();

}
    public function deletePurchaseUsersId()
    {
        $queryBuilder = $this->_em->createQueryBuilder();
        // $qb = $this->createQueryBuilder('pi')
        $queryBuilder->delete(Purchaseitem::class, 'pi');
            //  ->delete(PurchaseItem::class,'pi');
            //   ->from(PurchaseItem::class, 'pi')

       //     ->join('pi.purchase', 'p') // jointure entre purchaseitem et purchase
      //      ->join('p.user', 'u')//jointure entr purchase et user
         //   ->andWhere('pi.Activity = :id')
       //     ->andWhere('u.id = :id')
      //     ->setParameter('id', $id);

        // dd($qbgetQuery());
      //  $query = $queryBuilder->getQuery();
       return $queryBuilder->getQuery()->execute();
       // return $query->execute();



    }



// ...





//    /**
//     * @return PurchaseItem[] Returns an array of PurchaseItem objects
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

//    public function findOneBySomeField($value): ?PurchaseItem
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

