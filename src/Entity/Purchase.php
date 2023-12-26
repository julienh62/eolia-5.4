<?php

namespace App\Entity;

use DateTime;
use Doctrine\DBAL\Types\Types;
use App\Repository\PurchaseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



#[ORM\Entity(repositoryClass: PurchaseRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Purchase
{
    public const STATUS_PENDING = 'PENDING';
    public const STATUS_PAID = 'PAID';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

  //  #[ORM\Column(type: 'string', length: 255, nullable: true)]
  //  private ?string $fullName = null;
    
 // /**
 //    * @ORM\Column(length=255, nullable=true)
 //    */
  //  private ?string $address = null;

  //  /**
  //   * @ORM\Column(length=255, nullable=true)
 //    */
  //  private ?string $postalCode = null;

 //   /**
 //    * @ORM\Column(length=255, nullable=true)
  //   */
   // private ?string $city = null;

    // ...
    #[ORM\Column]
    private ?int $total = null;
    //par défaut le statut est pending (en attente)
    #[ORM\Column(length: 255)]
    private ?string $status = 'PENDING';

    #[ORM\ManyToOne(inversedBy: 'purchases')]
    private ?User $user = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $created_at = null;


    #[ORM\OneToMany(mappedBy: 'purchase', targetEntity: PurchaseItem::class, orphanRemoval: true, cascade:["persist"])]
    private Collection $purchaseItems;



    #[ORM\ManyToMany(targetEntity: Payment::class, mappedBy: 'paymentPurchase')]
    private Collection $payments;
    

    public function __construct()
    {
        $this->purchaseItems = new ArrayCollection();
        $this->payments = new ArrayCollection();
    }

    #[ORM\PrePersist]
    public function prePersist()
    {
        //avant de persister  si pas de date donnée
        //je donne nvlle date
        if (empty($this->created_at)) {
            $this->created_at = new DateTime();
        }

    }


    #[ORM\PreFlush]
    public function preFlush()
    {
     //   dd($this->purchaseItems);
      $total = 0;

       foreach ($this->purchaseItems as $item) {
          $total += $item->getTotal();
       }

       $this->total = $total;
    }  



    public function getId(): ?int
    {
        return $this->id;
    }
  //  public function getFullName(): ?string
  //  {
  //      return $this->fullName;
 //   }

  //  public function setFullName(?string $fullName): self
 //   {
 //       $this->fullName = $fullName;
  //      return $this;
//}

  /*  public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }/**/

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
{
    $this->user = $user;

    if ($user !== null) {
        $user->addPurchase($this);
    }

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
            $purchaseItem->setPurchase($this);
        }

        return $this;
    }

    public function removePurchaseItem(PurchaseItem $purchaseItem): self
    {
        if ($this->purchaseItems->removeElement($purchaseItem)) {
            // set the owning side to null (unless already changed)
            if ($purchaseItem->getPurchase() === $this) {
                $purchaseItem->setPurchase(null);
            }
        }

        return $this;
    }

    public function getCreated_at(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @return Collection<int, Payment>
     */
    public function getPayments(): Collection
    {
        return $this->payments;
    }

    public function addPayment(Payment $payment): self
    {
        if (!$this->payments->contains($payment)) {
            $this->payments->add($payment);
            $payment->addPaymentPurchase($this);
        }

        return $this;
    }

    public function removePayment(Payment $payment): self
    {
        if ($this->payments->removeElement($payment)) {
            $payment->removePaymentPurchase($this);
        }

        return $this;
    }
}
