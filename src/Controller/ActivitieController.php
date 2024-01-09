<?php

namespace App\Controller;

use \DateTime;
use App\Entity\User;
use App\Entity\Activitie;
use App\Form\ActivitieType;
use App\Service\Formatdate;
use App\Repository\ActivitieRepository;
use App\Repository\PurchaseItemRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ActivitieController extends AbstractController
{
   #[Route('/activitie', name: 'app_activitie_index')]
    public function index(ActivitieRepository $activitieRepository, Formatdate $formatdateService): Response
    {
          $activities = $activitieRepository->findAll();
          
         

        setlocale(LC_TIME, 'fr_FR');

        // Formate les dates avec le service Formatdate
        foreach ($activities as $activitie) {
            $activitie->formattedStartDate = $formatdateService->formatCustomDate($activitie->getStart());
            $activitie->formattedEndDate = $formatdateService->formatCustomDate($activitie->getEnd());
        }

       
        return $this->render('activitie/index.html.twig', [
            'activities' => $activities,
    
        ]);
    }



    #[Route('/activitieshow/{id}', name: 'app_activitie_show', priority: -1, methods: ['GET'])]
    public function show(Activitie $activitie, PurchaseItemRepository $purchaseItemRepository, ActivitieRepository $activitieRepository,$id): Response
    {
        $activities = $activitieRepository->findAll();

        $stock = $activitieRepository->getStockById($id);


     /*   $categoryData = $activitieRepository->getCategoryPictureAndPrice($id);
        $picture = $categoryData['picture'] ?? null;
        $price = $categoryData['price'] ?? null;


        $stock = $activitieRepository->getStock($id);*/
    
        $quantity = $purchaseItemRepository->getPurchaseActivitie($id);
        $resultquery = $purchaseItemRepository->getPurchaseQuantitySum($id);
        //dd($quantity);
        // je recupere les valeurs de la commandes
      /*  $activitieQuantityClient = $activitie->getPurchaseItems()->getValues();
    
             //si la quantité comandée est nulle 
       //je donne 0 à la valeur quantity 
        if ($activitieQuantityClient === []) {
              $activitieQuantityClient = [
              "quantity" =>"0"
               ];
           }
      //  $sommequantitecommande = $resultquery[0]["SUM(`quantity`)"];
        //dd($sommequantitecommande);/*/
       

        return $this->render('activitie/show.html.twig', [
            'activitie' => $activitie,
           //  'stock' => $stock,
        //   'picture' => $picture,
        //   'price' => $price
          // 'sommequantitecommande' => $sommequantitecommande
           // 'user' => $user
        ]);
    }

  // list activitie char
 /**
 * @Route("/activitieallchar", name="activitie_all_char")
 */
public function listActivitieByChar( ActivitieRepository $activitieRepository)
{
   $activitie = $activitieRepository->getAllChar();
   

    return $this->render(
        'activitie/listByCat.html.twig',
        [
           
            'activities'  => $activitie
        ]

    );
}


/**
 * @Route("/activitiescatamaran", name="cataAll_show")
 */
public function listActivitieByCatamaran( ActivitieRepository $activitieRepository, CategoryRepository $categoryRepository)
{
   $activitie = $activitieRepository->getAllCatamaran();
   $idCat = $categoryRepository->find($id = 2);
   
    return $this->render(
        'activitie/listByCat.html.twig',
        [
            'activities'  => $activitie,
            'idcat' => $idCat
            
        ]

    );
}

//list activitie kid
   /**
   * @Route("/activitiecharkid", name="charkidAll_show")
   */
  public function listActivitieByCharKid( ActivitieRepository $activitieRepository, CategoryRepository $categoryRepository)
  {
  
     $activitie = $activitieRepository->getAllCharKid();
     $idCat = $categoryRepository->find($id = 3);
  
      return $this->render(
          'activitie/listByCat.html.twig',
          [
              'activities'  => $activitie,
              'idcat' => $idCat 
          ]
  
      );
  }

    #[Route('/filter', name: 'filter', methods: ['GET'], priority: 2)]
    public function filterPrice( ActivitieRepository $activitieRepository,CategoryRepository $categoryRepository, Formatdate $formatdateService, Request $request ): Response
    {
        $categories = $categoryRepository->findAll();

        $filter = $request->get("filter");
        $min = $request->get("min");
        $begin = $request->get("begin");
        $end = $request->get("end");
        $category = $request->get("category");
        //   $max = $request->get("max");
       // dd($category);

      //  $activities = $activitieRepository->filter($filter, $min, $begin, $category, $end);
        $activities = $activitieRepository->filter($filter, $min, $begin, $end, $category);

        setlocale(LC_TIME, 'fr_FR');

        // Formate les dates avec le service Formatdate
        foreach ($activities as $activitie) {
            $activitie->formattedStartDate = $formatdateService->formatCustomDate($activitie->getStart());
            $activitie->formattedEndDate = $formatdateService->formatCustomDate($activitie->getEnd());
        }
//dd($activities);

        return $this->render('activitie/index.html.twig', [
            'activities' => $activities,
          
        ]);
    }


}

     