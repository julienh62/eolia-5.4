<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use App\Repository\CategoryRepository;

class GenerateLinkExtension extends AbstractExtension
{
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;

    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('generateCategoryLinks', [$this, 'generateCategoryLinks']),
        ];
    }
    

    public function generateCategoryLinks()
    {
        $categories = $this->categoryRepository->findBy(['activity' => true]);

        return $categories;
    }

  
}
