<?php

namespace App\Controller;

use App\Repository\ActivitieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;




class AgendaController extends AbstractController
{

    #[Route('/agenda', name: 'app_agenda')]
    public function index(ActivitieRepository $activitieRepository): Response
    {

        $backgroundColor = null;
        $borderColor = null;
        $textColor = null;

        $events = $activitieRepository->findAll();
         //    dd($events);

        //on initalise variable au cas où elle n'a pas encore de valeur
        $rdvs[] = [];




        foreach ($events as $event) {

           

                $colorSettings = $event->getCategory()->getCategorySetting();
                 //dd($colorSettings);
       
                 if ($colorSettings) {
                    $backGroundColor = $colorSettings->getBackGroundColor();
                    $borderColor = $colorSettings->getBorderColor();
                    $textColor = $colorSettings->getTextColor();
                } else {
                    // Définissez des valeurs par défaut au cas où CategorySetting n'est pas défini pour cette catégorie
                    $backgroundColor = '#d3dce3';
                    $borderColor = '#ffffff';
                    $textColor = '#000000';
                }
                



          
        
                $rdvs[] = [
                    'id' => $event->getId(),
                    'start' => $event->getStart()->format('Y-m-d H:i:s'),
                    'end' => $event->getEnd()->format('Y-m-d H:i:s'),
                    'stock' => $event->getStock(),
                    'title' => $event->getTitle(),
                    'backgroundColor' => $backGroundColor,
                    'borderColor' => $borderColor,
                      'textColor' => $textColor,
                ];
            }
        
        
        

        $data = json_encode($rdvs);
       // dd($data);
        return $this->render('agenda/index.html.twig', [
            'data' => json_encode($rdvs),  // Incluez les données existantes
        ]);
    
    }
}