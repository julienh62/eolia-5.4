<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/filter' => [[['_route' => 'filter', '_controller' => 'App\\Controller\\ActivitieController::filterPrice'], null, ['GET' => 0], null, false, false, null]],
        '/activitie' => [[['_route' => 'app_activitie_index', '_controller' => 'App\\Controller\\ActivitieController::index'], null, null, null, false, false, null]],
        '/activitieallchar' => [[['_route' => 'activitie_all_char', '_controller' => 'App\\Controller\\ActivitieController::listActivitieByChar'], null, null, null, false, false, null]],
        '/activitiescatamaran' => [[['_route' => 'cataAll_show', '_controller' => 'App\\Controller\\ActivitieController::listActivitieByCatamaran'], null, null, null, false, false, null]],
        '/activitiecharkid' => [[['_route' => 'charkidAll_show', '_controller' => 'App\\Controller\\ActivitieController::listActivitieByCharKid'], null, null, null, false, false, null]],
        '/admin/activitie' => [[['_route' => 'app_admin_activitie_index', '_controller' => 'App\\Controller\\Admin\\AdminActivitieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/agenda' => [[['_route' => 'app_admin_agenda', '_controller' => 'App\\Controller\\Admin\\AdminAgendaController::index'], null, null, null, false, false, null]],
        '/calendar' => [[['_route' => 'app_admin_calendar_index', '_controller' => 'App\\Controller\\Admin\\AdminCalendarController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/createCalendarChoose' => [[['_route' => 'app_admin_formChooseCalendar', '_controller' => 'App\\Controller\\Admin\\AdminCalendarController::chooseLocationForm'], null, null, null, false, false, null]],
        '/admin/category' => [[['_route' => 'app_admin_category_index', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/category/new' => [[['_route' => 'app_admin_category_new', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/categorysetting' => [[['_route' => 'app_admin_category_setting_index', '_controller' => 'App\\Controller\\Admin\\AdminCategorySettingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/categorysetting/new' => [[['_route' => 'app_admin_category_setting_new', '_controller' => 'App\\Controller\\Admin\\AdminCategorySettingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/staff' => [[['_route' => 'app_admin_staff_index', '_controller' => 'App\\Controller\\Admin\\AdminStaffController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/staff/new' => [[['_route' => 'app_admin_staff_new', '_controller' => 'App\\Controller\\Admin\\AdminStaffController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/staffschedule' => [[['_route' => 'app_admin_staff_schedule_index', '_controller' => 'App\\Controller\\Admin\\AdminStaffScheduleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/agenda' => [[['_route' => 'app_agenda', '_controller' => 'App\\Controller\\AgendaController::index'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/deleteAll' => [[['_route' => 'cart_delete_all', '_controller' => 'App\\Controller\\CartController::deleteAll'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact_form', '_controller' => 'App\\Controller\\ContactController::contactForm'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/presentation' => [[['_route' => 'app_presentation', '_controller' => 'App\\Controller\\HomeController::presentation'], null, null, null, false, false, null]],
        '/purchase/confirm' => [[['_route' => 'app_purchase_confirm', '_controller' => 'App\\Controller\\Purchase\\PurchaseConfirmationController::confirm'], null, null, null, false, false, null]],
        '/purchase' => [[['_route' => 'app_purchase', '_controller' => 'App\\Controller\\Purchase\\PurchaseListController::index'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|dmin/(?'
                        .'|activitie/([^/]++)(?'
                            .'|(*:41)'
                            .'|/edit(*:53)'
                            .'|(*:60)'
                        .')'
                        .'|ca(?'
                            .'|lendar/new/([^/]++)(*:92)'
                            .'|tegory(?'
                                .'|/([^/]++)(?'
                                    .'|(*:120)'
                                    .'|/edit(*:133)'
                                    .'|(*:141)'
                                .')'
                                .'|setting/([^/]++)(?'
                                    .'|(*:169)'
                                    .'|/edit(*:182)'
                                    .'|(*:190)'
                                .')'
                            .')'
                        .')'
                        .'|staff(?'
                            .'|/([^/]++)(?'
                                .'|(*:221)'
                                .'|/edit(*:234)'
                                .'|(*:242)'
                            .')'
                            .'|schedule/([^/]++)(?'
                                .'|(*:271)'
                                .'|/edit(*:284)'
                                .'|(*:292)'
                            .')'
                        .')'
                    .')'
                    .'|ctivitieshow/([^/]++)(*:324)'
                .')'
                .'|/ca(?'
                    .'|lendar(?'
                        .'|/([^/]++)(?'
                            .'|(*:360)'
                            .'|/edit(*:373)'
                        .')'
                        .'|delete/([^/]++)(*:397)'
                    .')'
                    .'|rt/(?'
                        .'|add/(\\d+)(*:421)'
                        .'|de(?'
                            .'|lete/(\\d+)(*:444)'
                            .'|crement/(\\d+)(*:465)'
                        .')'
                    .')'
                .')'
                .'|/purchase/(?'
                    .'|pay/([0-9]+)(*:501)'
                    .'|terminate/([0-9]+)(*:527)'
                .')'
                .'|/forgot\\-mdp/([^/]++)(*:557)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:596)'
                    .'|wdt/([^/]++)(*:616)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:662)'
                            .'|router(*:676)'
                            .'|exception(?'
                                .'|(*:696)'
                                .'|\\.css(*:709)'
                            .')'
                        .')'
                        .'|(*:719)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        41 => [[['_route' => 'app_admin_activitie_show', '_controller' => 'App\\Controller\\Admin\\AdminActivitieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        53 => [[['_route' => 'app_admin_activitie_edit', '_controller' => 'App\\Controller\\Admin\\AdminActivitieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        60 => [[['_route' => 'app_admin_activitie_delete', '_controller' => 'App\\Controller\\Admin\\AdminActivitieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        92 => [[['_route' => 'app_admin_calendar_new', '_controller' => 'App\\Controller\\Admin\\AdminCalendarController::new'], ['typeCalendar'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        120 => [[['_route' => 'app_admin_category_show', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        133 => [[['_route' => 'app_admin_category_edit', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        141 => [[['_route' => 'app_admin_category_delete', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        169 => [[['_route' => 'app_admin_category_setting_show', '_controller' => 'App\\Controller\\Admin\\AdminCategorySettingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        182 => [[['_route' => 'app_admin_category_setting_edit', '_controller' => 'App\\Controller\\Admin\\AdminCategorySettingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        190 => [[['_route' => 'app_admin_category_setting_delete', '_controller' => 'App\\Controller\\Admin\\AdminCategorySettingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        221 => [[['_route' => 'app_admin_staff_show', '_controller' => 'App\\Controller\\Admin\\AdminStaffController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        234 => [[['_route' => 'app_admin_staff_edit', '_controller' => 'App\\Controller\\Admin\\AdminStaffController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        242 => [[['_route' => 'app_admin_staff_delete', '_controller' => 'App\\Controller\\Admin\\AdminStaffController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        271 => [[['_route' => 'app_admin_staff_schedule_show', '_controller' => 'App\\Controller\\Admin\\AdminStaffScheduleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        284 => [[['_route' => 'app_admin_staff_schedule_edit', '_controller' => 'App\\Controller\\Admin\\AdminStaffScheduleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        292 => [[['_route' => 'app_admin_staff_schedule_delete', '_controller' => 'App\\Controller\\Admin\\AdminStaffScheduleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        324 => [[['_route' => 'app_activitie_show', '_controller' => 'App\\Controller\\ActivitieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        360 => [[['_route' => 'app_admin_calendar_show', '_controller' => 'App\\Controller\\Admin\\AdminCalendarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        373 => [[['_route' => 'app_admin_calendar_edit', '_controller' => 'App\\Controller\\Admin\\AdminCalendarController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        397 => [[['_route' => 'app_admin_calendar_delete', '_controller' => 'App\\Controller\\Admin\\AdminCalendarController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        421 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        444 => [[['_route' => 'cart_delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        465 => [[['_route' => 'cart_decrement', '_controller' => 'App\\Controller\\CartController::decrement'], ['id'], null, null, false, true, null]],
        501 => [[['_route' => 'purchase_payment_form', '_controller' => 'App\\Controller\\Purchase\\PurchasePaymentController::showCardForm'], ['id'], null, null, false, true, null]],
        527 => [[['_route' => 'purchase_payment_success', '_controller' => 'App\\Controller\\Purchase\\PurchasePaymentSuccessController::success'], ['id'], null, null, false, true, null]],
        557 => [[['_route' => 'reset_pass', '_controller' => 'App\\Controller\\SecurityController::resetPass'], ['token'], null, null, false, true, null]],
        596 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        616 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        662 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        676 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        696 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        709 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        719 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
