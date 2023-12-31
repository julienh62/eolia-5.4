<?php

namespace App\Entity;

use App\Repository\ActivitieRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ActivitieRepository::class)]
class Activitie extends Calendar
{

    #[ORM\Column]
    protected ?int $stock = null;

    #[ORM\Column]
    protected ?int $price = null;

    #[ORM\Column(nullable: true)]
    protected ?int $modifiedPrice = null;

    #[ORM\OneToOne(mappedBy: 'activitie', cascade: ['persist', 'remove'])]
    private ?ActivitieSettings $activitieSettings = null;

    #[ORM\OneToMany(mappedBy: 'activitie', targetEntity: PurchaseItem::class)]
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
    public function getActivitieSettings(): ?ActivitieSettings
    {
        return $this->activitieSettings;
    }

    public function setActivitieSettings(ActivitieSettings $activitieSettings): static
    {
        // set the owning side of the relation if necessary
        if ($activitieSettings->getActivitie() !== $this) {
            $activitieSettings->setActivitie($this);
        }

        $this->activitieSettings = $activitieSettings;

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
            if ($purchaseItem->getActivitie() === $this) {
                $purchaseItem->setActivitie(null);
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
