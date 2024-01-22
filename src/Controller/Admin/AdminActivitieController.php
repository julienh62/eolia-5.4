<?php

namespace App\Controller\Admin;

use App\Entity\Activity;
use App\Form\ActivityType;
use App\Repository\ActivityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/Activity')]
class AdminActivitieController extends AbstractController
{
    #[Route('/', name: 'app_admin_activitie_index', methods: ['GET'])]
    public function index(ActivityRepository $activityRepository): Response
    {
        return $this->render('admin/admin_activitie/index.html.twig', [
            'activities' => $activityRepository->findAll(),
        ]);
    }

  /* #[Route('/new', name: 'app_admin_activitie_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $Activity = new Activity();
        $form = $this->createForm(ActivityType::class, $Activity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($Activity);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_activitie_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin_activitie/new.html.twig', [
            'Activity' => $Activity,
            'form' => $form,
        ]);
    }
*/
    #[Route('/{id}', name: 'app_admin_activitie_show', methods: ['GET'])]
    public function show(Activity $Activity): Response
    {
        return $this->render('admin/admin_activitie/show.html.twig', [
            'Activity' => $Activity,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_activitie_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Activity $Activity, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ActivityType::class, $Activity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_activitie_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/admin_activitie/edit.html.twig', [
            'Activity' => $Activity,
            'form' => $form
        ]);
    }

    #[Route('/{id}', name: 'app_admin_activitie_delete', methods: ['POST'])]
    public function delete(Request $request, Activity $Activity, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$Activity->getId(), $request->request->get('_token'))) {
            $entityManager->remove($Activity);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_activitie_index', [], Response::HTTP_SEE_OTHER);
    }
}
