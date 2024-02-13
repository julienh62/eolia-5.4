<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/admin/category')]
class AdminCategoryController extends AbstractController
{
    #[Route('/', name: 'app_admin_category_index', methods: ['GET'])]
    public function index(CategoryRepository $categoryRepository): Response
    {
        return $this->render('admin/admin_category/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }

    #[Route('/images', name: 'app_admin_category_image', methods: ['GET'])]
    public function catImage(CategoryRepository $categoryRepository): Response
    {
        // Récupérer toutes les catégories avec leurs images
        $categoriesImages = $categoryRepository->findAllWithImages();
          
        // Retourner les données des catégories au format JSON
    return new JsonResponse($categoriesImages);
    }

    #[Route('/new', name: 'app_admin_category_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
             /** @var UploadedFile $imageFile */
             $imageFile = $form->get('image')->getData();

           

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                // Move the file to the directory where images are stored
                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Handle exception if something happens during file upload
                }

                // Updates the 'imageFilename' property to store the file name
                // instead of its contents
                $category->setImage($newFilename);
            }


            $entityManager->persist($category);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_category_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/admin_category/new.html.twig', [
            'category' => $category,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_category_show', methods: ['GET'])]
    public function show(Category $category): Response
    {
        return $this->render('admin/admin_category/show.html.twig', [
            'category' => $category,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_category_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Category $category, SluggerInterface $slugger, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
               /** @var UploadedFile $imageFile */
               $imageFile = $form->get('image')->getData();

  
              if ($imageFile) {
                  $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                  $safeFilename = $slugger->slug($originalFilename);
                  $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
  
                  // Move the file to the directory where images are stored
                  try {
                      $imageFile->move(
                          $this->getParameter('images_directory'),
                          $newFilename
                      );
                  } catch (FileException $e) {
                      // Handle exception if something happens during file upload
                  }
  
                  // Updates the 'imageFilename' property to store the file name
                  // instead of its contents
                  $category->setImage($newFilename);
              }
  
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_category_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/admin_category/edit.html.twig', [
            'category' => $category,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_category_delete', methods: ['POST'])]
    public function delete(Request $request, Category $category, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$category->getId(), $request->request->get('_token'))) {
            $entityManager->remove($category);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_category_index', [], Response::HTTP_SEE_OTHER);
    }
}
