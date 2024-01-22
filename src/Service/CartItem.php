<?php

namespace App\Service;

use App\Entity\Activity;

// Cartitem est une class qui sert à passer les parametres 
//et les propriétés nécessaires aux méthodes du cartService 

class CartItem {
    
    public $Activity;
    public $quantity;
    public $stock;

    public function __construct(Activity $Activity, int $quantity, int $stock)
    {
       
        $this->Activity = $Activity;
        $this->quantity = $quantity;
        $this->stock = $stock;
    }

    public function getTotal(): int 
    {
        return $this->Activity->getPrice() * $this->quantity;
    }

}