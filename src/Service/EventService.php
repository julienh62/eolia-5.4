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

    public function getEventData(string $categoryTitle): array
{

    $image = $this->calendarRepository->getCategoryImage($categoryTitle);
    //dd($image);
    $events = $this->calendarRepository->getActivityByCategoryTitle($categoryTitle);
    $rdvs = [];

    foreach ($events as $event) {
        $colorSettings = $event->getCategory()->getCategorySetting();

        if ($colorSettings) {
            $backGroundColor = $colorSettings->getBackGroundColor();
            $borderColor = $colorSettings->getBorderColor();
            $textColor = $colorSettings->getTextColor();
        } else {
            // Définissez des valeurs par défaut au cas où CategorySetting n'est pas défini pour cette catégorie
            $backGroundColor = '#d3dce3';
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

    return [
        'events' => $rdvs,
        'image'  => $image,
    ];
        
}
}