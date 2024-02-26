<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AgendaByCategoryController extends AbstractAgendaController
{
    // Assurez-vous que la méthode est publique et non abstraite
    public function renderAgendaByCategory(string $categoryTitle): Response
    {
        // Vous pouvez utiliser la méthode héritée pour le rendu de l'agenda par catégorie
        return parent::renderAgendaByCategory($categoryTitle);
    }
}
