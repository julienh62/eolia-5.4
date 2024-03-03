<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AgendaByCategoryController extends AbstractAgendaController
{
    
    public function renderAgendaByCategory(string $categoryTitle): Response
    {
        //  la méthode héritée pour le rendu de l'agenda par catégorie
        return parent::renderAgendaByCategory($categoryTitle);
    }
}



