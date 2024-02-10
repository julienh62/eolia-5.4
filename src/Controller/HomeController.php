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
        // Récupérer l'utilisateur connecté
        $user = $this->getUser();

        // Initialiser le nom complet à null par défaut
        $fullName = null;

        // Vérifier si un utilisateur est connecté
        if ($user) {
            // Si oui, récupérer le nom complet de l'utilisateur
            $fullName = $user->getFullName();
        }
        
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
           'fullName' => $fullName,
        ]);

    }

    #[Route('/presentation', name: 'app_presentation')]
    public function presentation()
    {

        return $this->render('home/presentation.html.twig', [
         
        ]);
    }
}