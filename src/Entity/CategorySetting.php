<?php

namespace App\Entity;

use App\Repository\CategorySettingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorySettingRepository::class)]
class CategorySetting
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titleCategorySetting = null;

    #[ORM\Column(length: 255)]
    private ?string $textColor = null;

    #[ORM\Column(length: 255)]
    private ?string $backGroundColor = null;

    #[ORM\Column(length: 255)]
    private ?string $borderColor = null;

    #[ORM\OneToOne(inversedBy: 'categorySetting', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $category = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleCategorySetting(): ?string
    {
        return $this->titleCategorySetting;
    }

    public function setTitleCategorySetting(string $titleCategorySetting): static
    {
        $this->titleCategorySetting = $titleCategorySetting;

        return $this;
    }

    public function getBackGroundColor(): ?string
    {
        return $this->backGroundColor;
    }

    public function setBackGroundColor(string $backGroundColor): static
    {
        $this->backGroundColor = $backGroundColor;

        return $this;
    }

    public function getBorderColor(): ?string
    {
        return $this->borderColor;
    }

    public function setBorderColor(string $borderColor): static
    {
        $this->borderColor = $borderColor;

        return $this;
    }

    public function getTextColor(): ?string
    {
        return $this->textColor;
    }

    public function setTextColor(string $textColor): static
    {
        $this->textColor = $textColor;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(Category $category): static
    {
        $this->category = $category;

        return $this;
    }
}
