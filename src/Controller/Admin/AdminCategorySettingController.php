<?php

namespace App\Controller\Admin;

use App\Entity\CategorySetting;
use App\Form\CategorySettingType;
use App\Repository\CategorySettingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/categorysetting')]
class AdminCategorySettingController extends AbstractController
{
    #[Route('/', name: 'app_admin_category_setting_index', methods: ['GET'])]
    public function index(CategorySettingRepository $categorySettingRepository): Response
    {
        return $this->render('admin/admin_category_setting/index.html.twig', [
            'category_settings' => $categorySettingRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_admin_category_setting_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $categorySetting = new CategorySetting();
        $form = $this->createForm(CategorySettingType::class, $categorySetting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($categorySetting);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_category_setting_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/admin_category_setting/new.html.twig', [
            'category_setting' => $categorySetting,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_category_setting_show', methods: ['GET'])]
    public function show(CategorySetting $categorySetting): Response
    {
        return $this->render('admin/admin_category_setting/show.html.twig', [
            'category_setting' => $categorySetting,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_category_setting_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CategorySetting $categorySetting, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CategorySettingType::class, $categorySetting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_category_setting_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/admin_category_setting/edit.html.twig', [
            'category_setting' => $categorySetting,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_category_setting_delete', methods: ['POST'])]
    public function delete(Request $request, CategorySetting $categorySetting, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categorySetting->getId(), $request->request->get('_token'))) {
            $entityManager->remove($categorySetting);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_category_setting_index', [], Response::HTTP_SEE_OTHER);
    }
}
