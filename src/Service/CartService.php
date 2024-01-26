<?php

namespace App\Service;

use App\Repository\ActivityRepository;
use App\Entity\Activity;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Service\CartItem;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\SessionInterface;



class CartService
{

    protected $session;
    protected $activityRepository;
    protected $activity;
    protected $requestStack;


    public function __construct( Activity $activity , ActivityRepository $activityRepository, RequestStack $requestStack, SessionInterface $session ) {

        $this->session = $session;
        $this->activityRepository = $activityRepository;
        $this->activity = $activity;
        $this->requestStack = $requestStack;

    }

    protected function getCart() : array {
        return $this->session->get('cart', []);
    }

    protected function saveCart(array $cart)
    {
        return $this->session->set('cart', $cart);
    }

    public function empty() {
        $this->saveCart([]);
    }

    public function add(int $id) {




        //1 retrouver le panier dans la session
        //2 tableau vide si pas existant
        $cart = $this->getCart();

        //3 voir si le produit id existe



        //5 Sinon  quantité 1
        if (!array_key_exists($id, $cart)) {
            $cart[$id] = 0;
        }
        $cart[$id]++;


        //6 enregisterr le tableua dans la session
        $this->saveCart($cart);
    }


    public function remove(int $id)
    {
        // on récupère le panier actuel
        $cart = $this->getCart();

        unset($cart[$id]);

        $this->saveCart($cart);
    }

    public function decrement(int $id)
    {
        $cart = $this->getCart();

        if (!array_key_exists($id, $cart)) {
            return;
        }

        //si le Activity est à 1 alors on supprime
        if ($cart[$id] === 1) {
            $this->remove($id);
            return;
        }
        //sinon on le decremente
        $cart[$id]--;

        $this->saveCart($cart);
    }




    public function getTotal():int {
        $total = 0;

        foreach($this->getCart() as $id => $quantity) {
            $activity = $this->activityRepository->find($id);

            if(!$activity) {
                continue;
            }

            $total += $activity->getPrice() * $quantity;
            //dd($total);
        }
        return $total;
    }


    public function getStock(): int {
        // Utilisez la méthode getStockActivitie() du ActivityRepository pour récupérer la quantité  panier pour un produit donné
        $stock = $this->activity->getStock();
        if ($stock === null) {
            return 0;
        }
        // Retournez le stock
        return $stock;
    }
    public function validateOrder(): bool
    {
        $cartItems = $this->getDetailedCartItems();
        $isValid = true;

        foreach ($cartItems as $cartItem) {
            $quantityOrdered = $cartItem->quantity;
            $stockAvailable = $cartItem->stock;

            if ($quantityOrdered > $stockAvailable) {
                $isValid = false;
                break; // Arrêter la boucle dès qu'une quantité dépasse le stock disponible
            }
        }

        return $isValid;
    }
    /**
     * @return CartItem[]
     */
    public function getDetailedCartItems(): array {
        $detailedCart = [];


        foreach ($this->getCart() as $id => $quantity) {
            $activity = $this->activityRepository->find($id);
            // si un Activity est supprimé, on continue la boucle
            if(!$activity) {
                continue;
            }

            $stock = $activity->getStock();
            // dd($detailedCart);
            $detailedCart[] = new CartItem($activity, $quantity , $stock);

        }
        //dd($detailedCart);
        return $detailedCart;
    }

    public function removeAll()
    {
        $this->session->set("cart", []);
    }
}

