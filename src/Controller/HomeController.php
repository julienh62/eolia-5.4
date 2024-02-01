<?php

namespace App\Controller;

use App\Entity\Category;
use App\Twig\GenerateLinkExtension;
use App\Repository\CalendarRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(CalendarRepository $calendarRepository,  GenerateLinkExtension $generateLinkExtension)
    {
        // Récupérer toutes les titres et image par categories
        $categoriesImgTitle = $calendarRepository->getImgAndTitleActivitie();
            //dd($categoriesImgTitle);

            $titles = [];
            $images = [];

            foreach ($categoriesImgTitle as $category) {
            
                $titles[] = $category['titleCategory'];
                $images[] = $category['image'];
            }

         // Utiliser le service pour récupérer les liens de catégorie
         $categoryLinks = $generateLinkExtension->generateCategoryLinks();
          //   dd($categoryLinks);

           
          

       return $this->render('home/index.html.twig', [
            'titles' => $titles,
           'images' => $images,
           'categoryLinks' => $categoryLinks,
        ]);

    }

    #[Route('/presentation', name: 'app_presentation')]
    public function presentation()
    {

        return $this->render('home/presentation.html.twig', [
         
        ]);
    }
}
