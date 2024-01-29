<?php

namespace App\Controller\Admin;

use App\Entity\PurchaseItem;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use App\Service\SendMailService;
use App\Repository\PurchaseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;



class AdminUserController extends AbstractController
{
    private $sendMailService;
    
    public function __construct(SendMailService $sendMailService)
    {
        $this->sendMailService = $sendMailService;
    }
    #[Route('admin/user', name: 'admin_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        $user = $userRepository->getAll();

        return $this->render('admin/user/index.html.twig', [
        
         'users' => $user

        ]);
    }


    #[Route('admin/user/new', name: 'admin_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UserRepository $userRepository, SendMailService $sendMailService): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);
    
            // Récupérer le mot de passe généré précédemment
            $password = $user->getPassword();
    
            // Envoyer un e-mail de confirmation
            $sendMailService->send(
                'noreply@example.com',
                $user->getEmail(),
                //titre du mail (objet du mail)
                'Confirmation de création de compte',
                //nom du fichier twig
                'confirmation_creation_compte',
                ['user' => $user, 'password' => $password]
            );
            
            return $this->redirectToRoute('admin_user_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->renderForm('admin/user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
    

    #[Route('admin/user/{id}', name: 'admin_user_show', methods: ['GET'])]
    public function show(UserRepository $userRepository, $id, User $user): Response
    {

        return $this->render('admin/user/show.html.twig', [
          //  'user' => $userRepository->findOneBy($id),
         //   'purchases' => $user->getPurchases()
         'user' => $user,
        'purchases' => $user->getPurchases()

        ]);
    }

   /* #[Route('search/{searchItem}', name: 'user_search')]
    public function searchUser(  UserRepository $userRepository,  $searchItem = null):JsonResponse
    {
      //
    $user = $userRepository->getByEmail($searchItem);

// 200 c'est le statut http attendu
//etape 3
        return $this->json( $user, 200, [], ['groups' => 'user:read']
        );
    }  */
       

    #[Route('search/{searchItem}', name: 'user_search')]
public function searchUser(UserRepository $userRepository, $searchItem = null): JsonResponse
{
    // Vérifiez d'abord si $searchItem n'est pas vide
    if ($searchItem === null || trim($searchItem) === '') {
        // Gestion du cas où la saisie est vide ou null
        return $this->json([], 200);
    }

    // Utilisez une méthode du repository pour rechercher des utilisateurs par correspondance partielle
    $users = $userRepository->searchByPartialEmail($searchItem);

    return $this->json($users, 200, [], ['groups' => 'user:read']);
}


#[Route('searchname/{searchItemName}', name: 'user_searchname')]
public function searchUserName(UserRepository $userRepository, $searchItemName = null): JsonResponse
{
    // Utilisez la méthode searchByPartialName pour rechercher des utilisateurs par nom partiel
    $users = $userRepository->searchByPartialName($searchItemName);

    return $this->json($users, 200, [], ['groups' => 'user:read']);
}

// UserController.php

#[Route('searchphone/{phone}', name: 'user_searchphone')]
public function searchByPhone(UserRepository $userRepository, $phone = null): JsonResponse
{
    // Utilisez la méthode searchByPartialPhone (à créer dans UserRepository) pour rechercher des utilisateurs par numéro de téléphone partiel
    $users = $userRepository->searchByPartialPhone($phone);

    return $this->json($users, 200, [], ['groups' => 'user:read']);
}



    #[Route('admin/user/delete/{id}', name: 'admin_user_delete', methods: ['GET'])]
    public function delete( User $user, UserRepository $userRepository, PurchaseRepository $purchaseRepository): Response
    {
        // Check if there are related purchases for this user
     $relatedPurchases = $purchaseRepository->findBy(['user' => $user]);

      // Delete related purchases first
    foreach ($relatedPurchases as $purchase) {
        $purchaseRepository->remove($purchase, true);
    }
    // Now you can safely delete the user
        $userRepository->remove($user, true); 

    return $this->redirectToRoute('admin_user_index');
    }
}