<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
 * @extends ServiceEntityRepository<User>
 *
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function save(User $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(User $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newHashedPassword);

        $this->save($user, true);
    }

 /**
     * @return User[] Returns an array of User objects
     */
    public function getAll()
    {
    
        return $this->createQueryBuilder('s')
          ->orderBy("s.id", "desc")
          ->getQuery()
          ->getResult()
       ;
    }





    /**
     *  @return User[] Returns an array of User objects
     */
    public function getByEmail($email){
        return $this->createQueryBuilder('s')
            ->where('s.email = :email' )
          ->setParameter('email', $email)
            ->getQuery()
            ->getResult()
            ;

    }

    /**
     * Recherche des utilisateurs par une saisie partielle de leur adresse e-mail.
     *
     * @param string $searchItem La saisie partielle de l'e-mail de l'utilisateur.
     * @return User[] Retourne un tableau d'objets User.
     */
    public function searchByPartialEmail($searchItem)
    {
        // Crée une requête pour récupérer les utilisateurs
        return $this->createQueryBuilder('u')
             // Ajoute une condition pour rechercher les e-mails 
             //correspondant partiellement à la saisie
            ->where('LOWER(u.email) LIKE :searchItem')
            /*  Associe la valeur de la saisie à la clause WHERE, 
            en l'entourant de `%` pour rechercher des correspondances partielles*/
            ->setParameter('searchItem', '%' . strtolower($searchItem) . '%')
            // Exécute la requête 
            ->getQuery()
           // retourne les résultats
            ->getResult();
    }





    /**
     *  @return User[] Returns an array of User objects
     */
    public function getByName($fullName){
        return $this->createQueryBuilder('s')
            ->where('s.fullName = :fullName' )
          ->setParameter('fullName', $fullName)
            ->getQuery()
            ->getResult()
            ;

    }

    /**
 * @param string $searchItemName La saisie partielle du nom de l'utilisateur
 * @return User[] Returns an array of User objects
 */
public function searchByPartialName($searchItemName)
{
    return $this->createQueryBuilder('u')
        ->where('LOWER(u.fullName) LIKE :searchItemName')
        ->setParameter('searchItemName', '%' . strtolower($searchItemName) . '%')
        ->getQuery()
        ->getResult();
}


 /**
     * Recherche des utilisateurs par numéro de téléphone partiel
     *
     * @param string $phonePart Le numéro de téléphone partiel à rechercher
     * @return User[] Retourne un tableau d'objets User correspondant à la recherche
     */
    public function searchByPartialPhone($phonePart)
    {
        return $this->createQueryBuilder('u')
            ->where('u.phone LIKE :phonePart')
            ->setParameter('phonePart', '%' . $phonePart . '%')
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return User[] Returns an array of User objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?User
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
