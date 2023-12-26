<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/activitieSetting' => [[['_route' => 'app_admin_activitie_setting', '_controller' => 'App\\Controller\\ActivitieSettingController::index'], null, null, null, false, false, null]],
        '/admin/activitiesettingChoose' => [[['_route' => 'app_admin_formChooseActivitie', '_controller' => 'App\\Controller\\ActivitieSettingController::chooseActivitieForm'], null, null, null, false, false, null]],
        '/admin/activitieSettingNew' => [[['_route' => 'app_admin_activitie_setting_new', '_controller' => 'App\\Controller\\ActivitieSettingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/activitie' => [[['_route' => 'app_admin_activitie_index', '_controller' => 'App\\Controller\\AdminActivitieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/calendar' => [[['_route' => 'app_admin_calendar_index', '_controller' => 'App\\Controller\\AdminCalendarController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/calendar/createCalendarChoose' => [[['_route' => 'app_admin_formChooseCalendar', '_controller' => 'App\\Controller\\AdminCalendarController::chooseLocationForm'], null, null, null, false, false, null]],
        '/admin/staff' => [[['_route' => 'app_admin_staff_index', '_controller' => 'App\\Controller\\AdminStaffController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/staff/new' => [[['_route' => 'app_admin_staff_new', '_controller' => 'App\\Controller\\AdminStaffController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/staffschedule' => [[['_route' => 'app_admin_staff_schedule_index', '_controller' => 'App\\Controller\\AdminStaffScheduleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/agenda' => [[['_route' => 'app_agenda', '_controller' => 'App\\Controller\\AgendaController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact_form', '_controller' => 'App\\Controller\\ContactController::contactForm'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/presentation' => [[['_route' => 'app_presentation', '_controller' => 'App\\Controller\\HomeController::presentation'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_registration', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/forgot-mdp' => [[['_route' => 'forgotten_password', '_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], null, null, null, false, false, null]],
        '/consultez-vos-mails' => [[['_route' => 'app_consultez-vos-mails', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/admin/ScheduleStaffSetting' => [[['_route' => 'app_admin_ScheduleStaff_setting', '_controller' => 'App\\Controller\\StaffScheduleSettingController::index'], null, null, null, false, false, null]],
        '/admin/ScheduleStaffSettingNew' => [[['_route' => 'app_admin_scheduleStaffs_setting_new', '_controller' => 'App\\Controller\\StaffScheduleSettingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/favicon.ico' => [[['_route' => 'favicon'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|activitie/([^/]++)(?'
                        .'|(*:38)'
                        .'|/edit(*:50)'
                        .'|(*:57)'
                    .')'
                    .'|calendar/(?'
                        .'|new/([^/]++)(*:89)'
                        .'|([^/]++)(?'
                            .'|(*:107)'
                            .'|/edit(*:120)'
                            .'|(*:128)'
                        .')'
                    .')'
                    .'|staff(?'
                        .'|/([^/]++)(?'
                            .'|(*:158)'
                            .'|/edit(*:171)'
                            .'|(*:179)'
                        .')'
                        .'|schedule/([^/]++)(?'
                            .'|(*:208)'
                            .'|/edit(*:221)'
                            .'|(*:229)'
                        .')'
                    .')'
                .')'
                .'|/forgot\\-mdp/([^/]++)(*:261)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:300)'
                    .'|wdt/([^/]++)(*:320)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:366)'
                            .'|router(*:380)'
                            .'|exception(?'
                                .'|(*:400)'
                                .'|\\.css(*:413)'
                            .')'
                        .')'
                        .'|(*:423)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'app_admin_activitie_show', '_controller' => 'App\\Controller\\AdminActivitieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        50 => [[['_route' => 'app_admin_activitie_edit', '_controller' => 'App\\Controller\\AdminActivitieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        57 => [[['_route' => 'app_admin_activitie_delete', '_controller' => 'App\\Controller\\AdminActivitieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        89 => [[['_route' => 'app_admin_calendar_new', '_controller' => 'App\\Controller\\AdminCalendarController::new'], ['typeCalendar'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        107 => [[['_route' => 'app_admin_calendar_show', '_controller' => 'App\\Controller\\AdminCalendarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        120 => [[['_route' => 'app_admin_calendar_edit', '_controller' => 'App\\Controller\\AdminCalendarController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        128 => [[['_route' => 'app_admin_calendar_delete', '_controller' => 'App\\Controller\\AdminCalendarController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        158 => [[['_route' => 'app_admin_staff_show', '_controller' => 'App\\Controller\\AdminStaffController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        171 => [[['_route' => 'app_admin_staff_edit', '_controller' => 'App\\Controller\\AdminStaffController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        179 => [[['_route' => 'app_admin_staff_delete', '_controller' => 'App\\Controller\\AdminStaffController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        208 => [[['_route' => 'app_admin_staff_schedule_show', '_controller' => 'App\\Controller\\AdminStaffScheduleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        221 => [[['_route' => 'app_admin_staff_schedule_edit', '_controller' => 'App\\Controller\\AdminStaffScheduleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        229 => [[['_route' => 'app_admin_staff_schedule_delete', '_controller' => 'App\\Controller\\AdminStaffScheduleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        261 => [[['_route' => 'reset_pass', '_controller' => 'App\\Controller\\SecurityController::resetPass'], ['token'], null, null, false, true, null]],
        300 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        320 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        366 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        380 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        400 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        413 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        423 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
