<?php

namespace App\Controller;

//use App\Form\CartConfirmationType;
use App\Repository\ActivityRepository;
use App\Repository\PurchaseItemRepository;
use App\Service\Formatdate;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Service\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;

class CartController extends AbstractController
{
    /**
     * @var CartService
     */
    protected $cartService;

    /**
     * @var ActivityRepository
     */
    protected $activityRepository;

    public function __construct(Cartservice $cartService, ActivityRepository $activityRepository, PurchaseItemRepository $purchaseItemRepository)
    {
        $this->cartService = $cartService;
        $this->activityRepository = $activityRepository;

    }


    /**
     * @Route("/cart/add/{id<[0-9]+>}", name="cart_add", requirements={"id":"\d+"})
     */
    // public function add($id, Request $request, PurchaseItemRepository $purchaseItemRepository)
    // {
    // 0 est ce que le produit existe
    //  $Activity = $this->activityRepository->find($id);
    //    $stock = $this->activityRepository->getStock($id);
    // $quantity = $purchaseItemRepository->getQuantity($id);
//dd($stock);
    //   if (!$Activity) {

    //      throw $this->createNotFoundException("l activité demandée n'existe pas");
    //  }


    // Récupérer la quantité demandée dans le panier
    // $cartItems = $this->cartService->getDetailedCartItems();
    // $quantityCart = 0; // Valeur par défaut au cas où le tableau est vide ou l'indice n'est pas valide
//dd($cartItems);
//if (count($cartItems) > 0) {
    //   $quantityCart = $cartItems[0]->quantity;
//}
    // $quantityCart = $cartItems[0]->quantity;

    // dd($quantityCart);
    /*    $quantites = [];

          foreach ($cartItems as $cartItem) {
              $quantite = $cartItem->quantity;
              $quantites[] = $quantite;
          }
          dd($quantite);*/
    /*
            // Vérifier si la quantité dans le panier dépasse le stock disponible
        $requestedQuantity = $quantityCart + 1; // Ajouter 1 à la quantité demandée
        //dd($stock);
        //dd($requestedQuantity);
         if ($requestedQuantity > $stock) {
         $this->addFlash('danger', "La quantité maximum est atteinte");
         $this->cartService->decrement($id);
         $this->cartService->add($id);    */

    //   return $this->redirectToRoute('cart_index');
    //}
//}

    /*
          $this->cartService->add($id);

        //  $this->addFlash('success', "L activité a bien été ajoutée au panier");

         if ($request->query->get('returnToCart')) {
            return $this->redirectToRoute('cart_index');
        }


        return $this->redirectToRoute('cart_index');
    }
    */



    /**
     * @Route("/cart/add/{id<[0-9]+>}", name="cart_add", requirements={"id":"\d+"})
     */
    public function add($id, Request $request, PurchaseItemRepository $purchaseItemRepository)
    {



// Récupérer la quantité demandée dans le panier
        $cartItems = $this->cartService->getDetailedCartItems();
        $Activity = $this->activityRepository->find($id);

        if (!$Activity) {

            throw $this->createNotFoundException("l activité demandée n'existe pas");
        }




        $this->cartService->add($id);

        // Valider le panier
        $this->cartService->validateOrder();

//  $this->addFlash('success', "L activité a bien été ajoutée au panier");

        if ($request->query->get('returnToCart')) {
            return $this->redirectToRoute('cart_index');
        }


        return $this->redirectToRoute('cart_index');
    }





    /**
     * @Route("/cart", name="cart_index")
     */
    public function index(CartService $cartService, Formatdate $formatdate)
    {
        // $form = $this->createForm(CartConfirmationType::class);
        $detailedCart = $this->cartService->getDetailedCartItems();
        $total = $this->cartService->getTotal();
        $stock = $this->cartService->getStock();
        $isValidOrder = $this->cartService->validateOrder(); // Appel de la méthode validateOrder()





        return $this->render('cart/index.html.twig', [
            'items' => $detailedCart,
            'total' => $total,
            'stock' => $stock,
            'isValidOrder' => $isValidOrder,
            //  'confirmationForm' => $form->createView()
        ]);
    }


    /**
     *
     * @Route("/cart/delete/{id<[0-9]+>}", name="cart_delete", requirements={"id":"\d+"})
     */
    public function delete($id)
    {
        $Activity = $this->activityRepository->find($id);

        if (!$Activity) {
            throw $this->createNotFoundException("l activitée $id demandée n'existe pas");
        }

        $this->cartService->remove($id);


        //   dd($this->cartService);
        return $this->redirectToRoute('cart_index');


    }


    /**
     *
     * @Route("/cart/decrement/{id<[0-9]+>}", name="cart_decrement",
     *     requirements={"id": "\d+"})
     */
    public function decrement($id)
    {
        $Activity = $this->activityRepository->find($id);

        if (!$Activity) {
            throw $this->createNotFoundException("l activité $id demandée n'existe pas
            et ne peut etre décrémenté");
        }

        $this->cartService->decrement($id);


        return $this->redirectToRoute('cart_index');


    }





    /**
     * @Route("/cart/deleteAll", name="cart_delete_all")
     */
    public function deleteAll()
    {
        $this->cartService->removeAll();



        return $this->redirectToRoute('cart_index');
    }



}








