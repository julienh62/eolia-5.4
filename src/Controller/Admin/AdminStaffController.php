<?php

namespace App\Controller\Admin;

use App\Entity\Staff;
use App\Form\StaffType;
use App\Repository\StaffRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/admin/staff')]
class AdminStaffController extends AbstractController
{
    #[Route('/', name: 'admin_staff_index', methods: ['GET'])]
    public function index(StaffRepository $staffRepository): Response
    {
        // Récupère la liste de tout le personnel depuis le repository
        $staff = $staffRepository->findAll();

        // Rend le template Twig pour afficher la liste du personnel,
        // en passant les données récupérées
        return $this->render('admin/admin_staff/index.html.twig', [
            'staff' => $staff,
        ]);
    }

    #[Route('/new', name: 'admin_staff_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Crée une nouvelle instance de Staff
        $staff = new Staff();
    
        // Crée un formulaire en utilisant le formulaire de type StaffType et l'instance de Staff
        $form = $this->createForm(StaffType::class, $staff);
    
        // Gère la requête HTTP pour le formulaire
        $form->handleRequest($request);
    
        // Vérifie si le formulaire a été soumis et est valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Persiste l'entité Staff dans la base de données
            $entityManager->persist($staff);
            $entityManager->flush();
    
            // Redirige vers la page d'index du personnel après l'ajout avec un code de statut HTTP 303
            return $this->redirectToRoute('admin_staff_index', [], Response::HTTP_SEE_OTHER);
        }
    
        // Rend le template Twig pour afficher le formulaire de création du personnel
        return $this->render('admin/admin_staff/new.html.twig', [
            'staff' => $staff, // Passage de l'instance de Staff au template
            'form' => $form->createView(), // Passage du formulaire créé au template
        ]);
    }
    

    #[Route('/{id}', name: 'admin_staff_show', methods: ['GET'])]
    public function show(Staff $staff): Response
    {
        return $this->render('admin/admin_staff/show.html.twig', [
            'staff' => $staff,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_staff_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Staff $staff, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(StaffType::class, $staff);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('admin_staff_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/admin_staff/edit.html.twig', [
            'staff' => $staff,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'admin_staff_delete', methods: ['POST'])]
    public function delete(Request $request, Staff $staff, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$staff->getId(), $request->request->get('_token'))) {
            $entityManager->remove($staff);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_staff_index', [], Response::HTTP_SEE_OTHER);
    }
}
