<?php

namespace App\Entity;

use App\Repository\PaymentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaymentRepository::class)]
class Payment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $partialAmount = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $relation = null;

    #[ORM\ManyToMany(targetEntity: Purchase::class, inversedBy: 'payments')]
    private Collection $paymentPurchase;

    #[ORM\Column(nullable: true)]
    private ?int $installmentNumber = null;

    public function __construct()
    {
        $this->paymentPurchase = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPartialAmount(): ?string
    {
        return $this->partialAmount;
    }

    public function setPartialAmount(?string $partialAmount): self
    {
        $this->partialAmount = $partialAmount;

        return $this;
    }

    public function getRelation(): ?string
    {
        return $this->relation;
    }

    public function setRelation(?string $relation): self
    {
        $this->relation = $relation;

        return $this;
    }

    /**
     * @return Collection<int, Purchase>
     */
    public function getPaymentPurchase(): Collection
    {
        return $this->paymentPurchase;
    }

    public function addPaymentPurchase(Purchase $paymentPurchase): self
    {
        if (!$this->paymentPurchase->contains($paymentPurchase)) {
            $this->paymentPurchase->add($paymentPurchase);
        }

        return $this;
    }

    public function removePaymentPurchase(Purchase $paymentPurchase): self
    {
        $this->paymentPurchase->removeElement($paymentPurchase);

        return $this;
    }

    public function getInstallmentNumber(): ?int
    {
        return $this->installmentNumber;
    }

    public function setInstallmentNumber(?int $installmentNumber): self
    {
        $this->installmentNumber = $installmentNumber;

        return $this;
    }
}
