<?php

namespace App\Controller;

use App\Entity\StaffScheduleSettings;
use App\Form\StaffScheduleSettingsType;
use App\Repository\ActivityRepository;
use App\Repository\ActivitieSettingsRepository;
use App\Repository\StaffScheduleRepository;
use App\Repository\StaffScheduleSettingsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class StaffScheduleSettingController extends AbstractController
{
    #[Route('/ScheduleStaffSetting', name: 'app_admin_ScheduleStaff_setting')]
    public function index(StaffScheduleSettingsRepository $staffScheduleSettingsRepository): Response
    {
       // $activities = $activitieSettingsRepository->findAll();
        $scheduleStaffs = $staffScheduleSettingsRepository->findAll();

        return $this->render('admin_staffschedule_setting/login.html.twig', [
          // 'activities' => $activities,
            'scheduleStaffs' => $scheduleStaffs,
        ]);
    }
 /*   #[Route('/staffsettingChoose', name: 'app_admin_formChooseStaff')]
    public function chooseActivitieForm(ActivityRepository $activityRepository,StaffScheduleRepository $staffScheduleRepository, ActivitieSettingsRepository $activitieSettingsRepository): Response
    {
        $activitiesSettings = $activitieSettingsRepository->findAll();
        $scheduleStaffs = $staffScheduleRepository->findAll();
        $activities = $activityRepository->findAll();
        //dd($activities);
        return $this->render('admin_staffschedule_setting/chooseScheduleSetting.html.twig', [
            'activitiesSettings' => $activitiesSettings,
            'activities' => $activities,
            'scheduleStaffs' => $scheduleStaffs,
        ]);
    }

*/


    #[Route('/ScheduleStaffSettingNew', name: 'app_admin_scheduleStaffs_setting_new', methods: ['GET', 'POST'])]
    public function new(Request $request, StaffScheduleSettingsRepository $staffScheduleSettingsRepository): Response
    {
        $staffScheduleSettings = new StaffScheduleSettings();
        $form = $this->createForm(StaffScheduleSettingsType::class, $staffScheduleSettings);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $staffScheduleSettingsRepository->save($staffScheduleSettings, true);

            return $this->redirectToRoute('app_admin_ScheduleStaff_setting', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin_activitie_setting/new.html.twig', [
            'scheduleStaffSettings' => $staffScheduleSettings,
            'form' => $form,
        ]);
    }


}
