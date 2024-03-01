<?php

namespace App\Service;

use App\Repository\CalendarRepository;
use App\Repository\PurchaseItemRepository;

class EventService
{
    private $calendarRepository;
    private $purchaseItemRepository;

    public function __construct(CalendarRepository $calendarRepository, PurchaseItemRepository $purchaseItemRepository)
    {
        $this->calendarRepository = $calendarRepository;
        $this->purchaseItemRepository = $purchaseItemRepository;
    }

     /**
     * Récupère les données des événements et de l'image associée à une catégorie.
     *
     * @param string $categoryTitle Le titre de la catégorie d'événements.
     * @return array Un tableau contenant les événements et l'image associée.
     */
    public function getEventData(string $categoryTitle): array
    {
        // Récupération de l'image associée à la catégorie
        $image = $this->calendarRepository->getCategoryImage($categoryTitle);
        //dd($image);
         // Récupération des événements pour la catégorie spécifiée
        $events = $this->calendarRepository->getActivityByCategoryTitle($categoryTitle);
        // Initialisation du tableau pour stocker les événements formatés
        $rdvs = [];

        // Boucle à travers les événements récupérés
        foreach ($events as $event) {
            $colorSettings = $event->getCategory()->getCategorySetting();

            // Récupération des paramètres de couleur à partir des paramètres de catégorie, s'ils existent
            if ($colorSettings) {
                $backGroundColor = $colorSettings->getBackGroundColor();
                $borderColor = $colorSettings->getBorderColor();
                $textColor = $colorSettings->getTextColor();
            } else {
                // Définit des valeurs par défaut au cas où CategorySetting n'est pas défini pour cette catégorie
                $backGroundColor = '#d3dce3';
                $borderColor = '#ffffff';
                $textColor = '#000000';
            }
            // Formatage des données de l'événement
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

        // Encodage des données en JSON    
        $data = json_encode($rdvs);

         // Retourne un tableau contenant les événements et l'image associée
        return [
            'events' => $rdvs,
            'image'  => $image,
        ];
            
    }
}