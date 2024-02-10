<?php

namespace App\Entity;

use App\Repository\ActivityRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ActivityRepository::class)]
class Activity extends Calendar
{

    #[ORM\Column(nullable: true)]
    protected ?int $stock = null;

    #[ORM\Column]
    protected ?int $price = null;

    #[ORM\Column(nullable: true)]
    protected ?int $modifiedPrice = null;



    #[ORM\OneToMany(mappedBy: 'activity', targetEntity: PurchaseItem::class)]
    private Collection $purchaseItems;

    #[ORM\ManyToMany(targetEntity: User::class)]
    private Collection $users;


    public function __toString()
    {
        return $this->title;
    }
 

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): static
    {
        $this->stock = $stock;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    } 

   

    public function getModifiedPrice(): ?int
    {
        return $this->price;
    }

    public function setPriceModified(?int $modifiedPrice): self
    {
        $this->modifiedPrice = $modifiedPrice;
        return $this;
    }


 
     /**
     * @return Collection<int, PurchaseItem>
     */
    public function getPurchaseItems(): Collection
    {
        return $this->purchaseItems;
    }

    public function addPurchaseItem(PurchaseItem $purchaseItem): self
    {
        if (!$this->purchaseItems->contains($purchaseItem)) {
            $this->purchaseItems->add($purchaseItem);
            $purchaseItem->setActivitie($this);
        }

        return $this;
    }

    public function removePurchaseItem(PurchaseItem $purchaseItem): self
    {
        if ($this->purchaseItems->removeElement($purchaseItem)) {
            // set the owning side to null (unless already changed)
            if ($purchaseItem->getActivity() === $this) {
                $purchaseItem->setActivity(null);
            }
        }

        return $this;
    }

   /**
     * @return Collection<User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        $this->users->removeElement($user);

        return $this;
    }

   

    


}
