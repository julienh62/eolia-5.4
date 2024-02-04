<?php

namespace App\Entity;

use Assert\Email;
use Assert\Length;
use Assert\NotBlank;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;



#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[Groups(['user:read'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Groups(['user:read'])]
    #[ORM\Column(length: 60, unique: true)]
    #[NotBlank(message: "L'adresse e-mail est requise.")]
    #[Email(message: "L'adresse e-mail n'est pas valide.")]
    #[Length(max: 60, maxMessage: "L'adresse e-mail ne doit pas dépasser {{ limit }} caractères.")]
    private ?string $email = null;

    #[Groups(['user:read'])]
    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[Groups(['user:read'])]
    #[ORM\Column]
    private ?string $password = null;

    #[Groups(['user:read'])]
    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le nom complet est requis.")]
    #[Assert\Length(max: 50, maxMessage: "Le nom complet ne doit pas dépasser {{ limit }} caractères.")]
    private ?string $fullName = null;

    #[Groups(['user:read'])]
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Purchase::class, cascade: ["persist"])]
    private Collection $purchases;

//

    #[Groups(['user:read'])]
    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $resetToken;

    #[Groups(['user:read'])]
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le numéro de téléphone est requis.")]
    #[Assert\Regex(
        pattern: '/^\+?\d+$/',
        message: 'Veuillez entrer un numéro de téléphone valide (chiffres et optionnellement le signe +).'
    )]
    #[Assert\Length(max: 20, maxMessage: "Le numéro de téléphone ne doit pas dépasser {{ limit }} caractères.")]
    private ?string $phone = null;
  

    public function __construct()
    {
        $this->purchases = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(?string $fullName): self
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * @return Collection<int, Purchase>
     */
    public function getPurchases(): Collection
    {
        return $this->purchases;
    }

    public function addPurchase(Purchase $purchase): self
    {
        if (!$this->purchases->contains($purchase)) {
            $this->purchases->add($purchase);
            $purchase->setUser($this);
        }

        return $this;
    }

    public function removePurchase(Purchase $purchase): self
    {
        if ($this->purchases->removeElement($purchase)) {
            // set the owning side to null (unless already changed)
            if ($purchase->getUser() === $this) {
                $purchase->setUser(null);
            }
        }

        return $this;
    }


    public function getResetToken(): ?string
    {
        return $this->resetToken;
    }

    public function setResetToken(?string $resetToken): self
    {
        $this->resetToken = $resetToken;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }
}