<?php

namespace App\Service;

use App\Entity\Activity;

// Cartitem est une class qui sert à passer les parametres 
//et les propriétés nécessaires aux méthodes du cartService 

class CartItem {
    
    public $activity;
    public $quantity;
    public $stock;

    public function __construct(Activity $activity, int $quantity, int $stock)
    {
       
        $this->activity = $activity;
        $this->quantity = $quantity;
        $this->stock = $stock;
    }

    public function getTotal(): int 
    {
        return $this->activity->getPrice() * $this->quantity;
    }

}