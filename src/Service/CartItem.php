<?php

namespace App\Service;

use App\Entity\Activitie;

// Cartitem est une class qui sert à passer les parametres 
//et les propriétés nécessaires aux méthodes du cartService 

class CartItem {
    
    public $activitie;
    public $quantity;
    public $stock;

    public function __construct(Activitie $activitie, int $quantity, int $stock)
    {
       
        $this->activitie = $activitie;
        $this->quantity = $quantity;
        $this->stock = $stock;
    }

    public function getTotal(): int 
    {
        return $this->activitie->getPrice() * $this->quantity;
    }

}