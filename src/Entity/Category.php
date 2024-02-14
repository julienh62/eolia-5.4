<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titleCategory = null;

    #[ORM\Column(nullable: true, length: 255)]
    private ?string $image = null;

    #[ORM\Column]
    protected ?bool $activity = null;

    #[ORM\OneToOne(mappedBy: 'category', cascade: ['persist', 'remove'])]
    private ?CategorySetting $categorySetting = null;

    //#[ORM\OneToMany(mappedBy: 'categories', targetEntity: Calendar::class, orphanRemoval: true)]
    //protected Collection $calendars;

    #[ORM\OneToMany(mappedBy: 'category', targetEntity: Calendar::class, orphanRemoval: true)]
    protected Collection $calendars;
    

    public function __toString()
    {
        return $this->titleCategory;
    } 

    public function __construct()
    {
        $this->calendars = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleCategory(): ?string
    {
        return $this->titleCategory;
    }

    public function setTitleCategory(string $titleCategory): static
    {
        $this->titleCategory = $titleCategory;

        return $this;
    }
    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }     
    public function isActivity(): ?bool
    {
        return $this->activity;
    }
    public function setActivity(bool $activity): static
    {
        $this->activity = $activity;

        return $this;
    }

   /**
     * @return Collection<int, Calendar>
     */
    public function getCalendars(): Collection
    {
        return $this->calendars;
    }

    public function getCategorySetting(): ?CategorySetting
    {
        return $this->categorySetting;
    }

    public function setCategorySetting(CategorySetting $categorySetting): static
    {
        // set the owning side of the relation if necessary
        if ($categorySetting->getCategoriesTitle() !== $this) {
            $categorySetting->setCategoriesTitle($this);
        }

        $this->categorySetting = $categorySetting;

        return $this;
    }


}
