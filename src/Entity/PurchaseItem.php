<?php

namespace App\Entity;

use App\Repository\PurchaseItemRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Validator\Constraints as CustomAssert;

#[ORM\Entity(repositoryClass: PurchaseItemRepository::class)]
class PurchaseItem
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $activitieName = null;

    #[ORM\Column]
    private ?int $activitiePrice = null;

    #[ORM\Column]
    private ?int $quantity = null;

    #[ORM\Column]
    private ?int $total = null;

    #[ORM\ManyToOne(inversedBy: 'purchaseItems')]
    private ?Activitie $activitie = null;

    #[ORM\ManyToOne(inversedBy: 'purchaseItems')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Purchase $purchase = null;

   // #[ORM\Column]
   // private ?int $activitieStock = null;
    


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActivitie(): ?Activitie
    {
        return $this->activitie;
    }

    public function setActivitie(?Activitie $activitie): self
    {
        $this->activitie = $activitie;

        return $this;
    }

    public function getPurchase(): ?Purchase
    {
        return $this->purchase;
    }

    public function setPurchase(?Purchase $purchase): self
    {
        $this->purchase = $purchase;
        if(!$purchase->getPurchaseItems()->contains($this)) {
            $purchase->addPurchaseItem($this);
         }
         

        return $this;
    }

    public function getActivitieName(): ?string
    {
        return $this->activitieName;
    }

    public function setActivitieName(string $activitieName): self
    {
        $this->activitieName = $activitieName;

        return $this;
    }

    public function getActivitiePrice(): ?int
    {
        return $this->activitiePrice;
    }

    public function setActivitiePrice(int $activitiePrice): self
    {
        $this->activitiePrice = $activitiePrice;

        return $this;
    }




 /*   public function getCalendarStock(): ?int
    {
        return $this->activitieStock;
    }

    public function setCalendarStock(int $activitieStock): self
    {
        $this->activitieStock = $activitieStock;

        return $this;
    }

    public function __toString(): string
    {
        return $this->getId() ? (string) $this->getId() : 'New Purchase Item';
    }

*/


    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }
  
  
}
