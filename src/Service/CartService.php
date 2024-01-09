<?php

namespace App\Service;

use App\Repository\ActivitieRepository;
use App\Entity\Activitie;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Service\CartItem;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\SessionInterface;





class CartService
{

    protected $session;
    protected $activitieRepository;
    protected $activitie;
    protected $requestStack;


    public function __construct( Activitie $activitie , ActivitieRepository $activitieRepository, RequestStack $requestStack, SessionInterface $session ) {

        $this->session = $session;
        $this->activitieRepository = $activitieRepository;
        $this->activitie = $activitie;
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

        //si le activitie est à 1 alors on supprime
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
            $activitie = $this->activitieRepository->find($id);

            if(!$activitie) {
                continue;
            }

            $total += $activitie->getPrice() * $quantity;
            //dd($total);
        }
        return $total;
    }


    public function getStock(): int {
        // Utilisez la méthode getStockActivitie() du ActivitieRepository pour récupérer la quantité  panier pour un produit donné
        $stock = $this->activitie->getStock();
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
            $activitie = $this->activitieRepository->find($id);
            // si un activitie est supprimé, on continue la boucle
            if(!$activitie) {
                continue;
            }

            $stock = $activitie->getStock();
            // dd($detailedCart);
            $detailedCart[] = new CartItem($activitie, $quantity , $stock);

        }
        //dd($detailedCart);
        return $detailedCart;
    }

    public function removeAll()
    {
        $this->session->set("cart", []);
    }
}

