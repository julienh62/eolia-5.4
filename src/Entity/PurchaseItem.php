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
    private ?string $activityName = null;

    #[ORM\Column]
    private ?int $activityPrice = null;

    #[ORM\Column]
    private ?int $quantity = null;

    #[ORM\Column]
    private ?int $total = null;

    #[ORM\ManyToOne(inversedBy: 'purchaseItems')]
    private ?Activity $activity = null;

    #[ORM\ManyToOne(inversedBy: 'purchaseItems')]
    private ?Calendar $calendar = null;

    #[ORM\ManyToOne(inversedBy: 'purchaseItems')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Purchase $purchase = null;

   // #[ORM\Column]
   // private ?int $activitieStock = null;
    


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActivity(): ?Activity
    {
        return $this->activity;
    }

    public function setActivity(?Activity $activity): self
    {
        $this->activity = $activity;

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

    public function getActivityName(): ?string
    {
        return $this->activityName;
    }

    public function setActivityName(string $activityName): self
    {
        $this->activityName = $activityName;

        return $this;
    }

    public function getActivityPrice(): ?int
    {
        return $this->activityPrice;
    }

    public function setActivityPrice(int $activityPrice): self
    {
        $this->activityPrice = $activityPrice;

        return $this;
    }

public function getCalendar(): ?Calendar
    {
        return $this->calendar;
    }

    public function setCalendar(?Calendar $calendar): self
    {
        $this->calendar = $calendar;

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
