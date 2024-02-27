<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/filter' => [[['_route' => 'filter', '_controller' => 'App\\Controller\\CalendarController::filterPrice'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/activity' => [[['_route' => 'app_activitie_index', '_controller' => 'App\\Controller\\ActivitieController::index'], null, null, null, false, false, null]],
        '/admin/activity' => [[['_route' => 'app_admin_activitie_index', '_controller' => 'App\\Controller\\Admin\\AdminActivitieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/agenda' => [[['_route' => 'app_admin_agenda', '_controller' => 'App\\Controller\\Admin\\AdminAgendaController::index'], null, null, null, false, false, null]],
        '/admin/createCalendarChoose' => [[['_route' => 'app_admin_formChooseCalendar', '_controller' => 'App\\Controller\\Admin\\AdminCalendarController::chooseLocationForm'], null, null, null, false, false, null]],
        '/admin/category' => [[['_route' => 'app_admin_category_index', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/categoryimages' => [[['_route' => 'app_admin_category_image', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::catImage'], null, ['GET' => 0], null, false, false, null]],
        '/admin/category/new' => [[['_route' => 'app_admin_category_new', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/categorysetting' => [[['_route' => 'app_admin_category_setting_index', '_controller' => 'App\\Controller\\Admin\\AdminCategorySettingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/categorysetting/new' => [[['_route' => 'app_admin_category_setting_new', '_controller' => 'App\\Controller\\Admin\\AdminCategorySettingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/staff' => [[['_route' => 'app_admin_staff_index', '_controller' => 'App\\Controller\\Admin\\AdminStaffController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/staff/new' => [[['_route' => 'app_admin_staff_new', '_controller' => 'App\\Controller\\Admin\\AdminStaffController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/staffschedule' => [[['_route' => 'app_admin_staff_schedule_index', '_controller' => 'App\\Controller\\Admin\\AdminStaffScheduleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\Admin\\AdminUserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\Admin\\AdminUserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/usershow' => [[['_route' => 'app_showusers', '_controller' => 'App\\Controller\\Admin\\AdminUserShowController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/purchaseitem' => [[['_route' => 'app_purchase_item', '_controller' => 'App\\Controller\\Admin\\PurchaseItem\\PurchaseItemController::index'], null, null, null, false, false, null]],
        '/agenda' => [[['_route' => 'app_agenda', '_controller' => 'App\\Controller\\AgendaController::index'], null, null, null, false, false, null]],
        '/calendarfilter' => [[['_route' => 'app_calendar_filter', '_controller' => 'App\\Controller\\CalendarController::index'], null, null, null, false, false, null]],
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
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|([^/]++)/edit(?'
                            .'|(*:36)'
                            .'|staffschedule(*:56)'
                        .')'
                        .'|a(?'
                            .'|ctivity/([^/]++)(?'
                                .'|(*:87)'
                                .'|/edit(*:99)'
                                .'|(*:106)'
                            .')'
                            .'|genda(?'
                                .'|detail/([^/]++)(*:138)'
                                .'|listtoprint/([^/]++)(*:166)'
                            .')'
                        .')'
                        .'|ca(?'
                            .'|lendar(?'
                                .'|adduser(?'
                                    .'|/([^/]++)(*:209)'
                                    .'|quantity/([^/]++)/([^/]++)(*:243)'
                                .')'
                                .'|/(?'
                                    .'|new/([^/]++)(*:268)'
                                    .'|([^/]++)(*:284)'
                                .')'
                                .'|delete/([^/]++)(*:308)'
                            .')'
                            .'|tegory(?'
                                .'|/([^/]++)(?'
                                    .'|(*:338)'
                                    .'|/edit(*:351)'
                                    .'|(*:359)'
                                .')'
                                .'|setting/([^/]++)(?'
                                    .'|(*:387)'
                                    .'|/edit(*:400)'
                                    .'|(*:408)'
                                .')'
                            .')'
                        .')'
                        .'|edit/([^/]++)/([^/]++)(*:441)'
                        .'|purchase(?'
                            .'|/user/([^/]++)(*:474)'
                            .'|itemdelete/([^/]++)(*:501)'
                        .')'
                        .'|staff(?'
                            .'|/([^/]++)(?'
                                .'|(*:530)'
                                .'|/edit(*:543)'
                                .'|(*:551)'
                            .')'
                            .'|schedule/([^/]++)(?'
                                .'|(*:580)'
                                .'|/edit(*:593)'
                                .'|(*:601)'
                            .')'
                        .')'
                        .'|user(?'
                            .'|/(?'
                                .'|([^/]++)(*:630)'
                                .'|delete/([^/]++)(*:653)'
                            .')'
                            .'|showall/([^/]++)(*:678)'
                            .'|idshowall/([^/]++)(*:704)'
                        .')'
                        .'|/admin/calendarshowlienpaiement/([^/]++)/([^/]++)(*:762)'
                    .')'
                    .'|genda/([^/]++)(*:785)'
                    .'|ctivitieshow/([^/]++)(*:814)'
                .')'
                .'|/search(?'
                    .'|(?:/([^/]++))?(*:847)'
                    .'|name(?:/([^/]++))?(*:873)'
                    .'|phone(?:/([^/]++))?(*:900)'
                .')'
                .'|/cart/(?'
                    .'|add/(\\d+)(*:927)'
                    .'|de(?'
                        .'|lete/(\\d+)(*:950)'
                        .'|crement/(\\d+)(*:971)'
                    .')'
                .')'
                .'|/purchase/(?'
                    .'|pay/([0-9]+)(*:1006)'
                    .'|terminate/([0-9]+)(*:1033)'
                .')'
                .'|/forgot\\-mdp/([^/]++)(*:1064)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1104)'
                    .'|wdt/([^/]++)(*:1125)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1172)'
                            .'|router(*:1187)'
                            .'|exception(?'
                                .'|(*:1208)'
                                .'|\\.css(*:1222)'
                            .')'
                        .')'
                        .'|(*:1233)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        36 => [[['_route' => 'admin_activity_edit', '_controller' => 'App\\Controller\\Admin\\AdminCalendarController::activityEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        56 => [[['_route' => 'admin_staff_edit', '_controller' => 'App\\Controller\\Admin\\AdminCalendarController::staffEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        87 => [[['_route' => 'app_admin_activitie_show', '_controller' => 'App\\Controller\\Admin\\AdminActivitieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        99 => [[['_route' => 'app_admin_activitie_edit', '_controller' => 'App\\Controller\\Admin\\AdminActivitieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        106 => [[['_route' => 'app_admin_activitie_delete', '_controller' => 'App\\Controller\\Admin\\AdminActivitieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        138 => [[['_route' => 'admin_agenda_detail', '_controller' => 'App\\Controller\\Admin\\AdminAgendaDetailController::showusercalendarpurchase'], ['id'], ['GET' => 0], null, false, true, null]],
        166 => [[['_route' => 'admin_agenda_list_print', '_controller' => 'App\\Controller\\Admin\\AdminAgendaDetailController::calendarshowlistuserpurchase'], ['id'], ['GET' => 0], null, false, true, null]],
        209 => [[['_route' => 'admin_calendar_add_user', '_controller' => 'App\\Controller\\Admin\\AdminCalendarAddUserController::calendarAddUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        243 => [[['_route' => 'admin_calendar_add_user_quantity', '_controller' => 'App\\Controller\\Admin\\AdminCalendarAddUserQuantityController::calendarAddUserQuantity'], ['id', 'newUserId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        268 => [[['_route' => 'app_admin_calendar_new', '_controller' => 'App\\Controller\\Admin\\AdminCalendarController::new'], ['typeCalendar'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        284 => [[['_route' => 'app_admin_calendar_show', '_controller' => 'App\\Controller\\Admin\\AdminCalendarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        308 => [[['_route' => 'admin_calendar_delete', '_controller' => 'App\\Controller\\Admin\\AdminCalendarController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        338 => [[['_route' => 'app_admin_category_show', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        351 => [[['_route' => 'app_admin_category_edit', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        359 => [[['_route' => 'app_admin_category_delete', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        387 => [[['_route' => 'app_admin_category_setting_show', '_controller' => 'App\\Controller\\Admin\\AdminCategorySettingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        400 => [[['_route' => 'app_admin_category_setting_edit', '_controller' => 'App\\Controller\\Admin\\AdminCategorySettingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        408 => [[['_route' => 'app_admin_category_setting_delete', '_controller' => 'App\\Controller\\Admin\\AdminCategorySettingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        441 => [[['_route' => 'admin_calendar_edit', '_controller' => 'App\\Controller\\Admin\\AdminCalendarController::edit'], ['id', 'typeCalendar'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        474 => [[['_route' => 'admin_user_purchase', '_controller' => 'App\\Controller\\Admin\\AdminPurchaseUserController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        501 => [[['_route' => 'delete_purchaseitem', '_controller' => 'App\\Controller\\Admin\\PurchaseItem\\PurchaseItemController::delete'], ['id'], null, null, false, true, null]],
        530 => [[['_route' => 'app_admin_staff_show', '_controller' => 'App\\Controller\\Admin\\AdminStaffController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        543 => [[['_route' => 'app_admin_staff_edit', '_controller' => 'App\\Controller\\Admin\\AdminStaffController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        551 => [[['_route' => 'app_admin_staff_delete', '_controller' => 'App\\Controller\\Admin\\AdminStaffController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        580 => [[['_route' => 'app_admin_staff_schedule_show', '_controller' => 'App\\Controller\\Admin\\AdminStaffScheduleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        593 => [[['_route' => 'app_admin_staff_schedule_edit', '_controller' => 'App\\Controller\\Admin\\AdminStaffScheduleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        601 => [[['_route' => 'app_admin_staff_schedule_delete', '_controller' => 'App\\Controller\\Admin\\AdminStaffScheduleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        630 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\Admin\\AdminUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        653 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\AdminUserController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        678 => [[['_route' => 'all_user_show', '_controller' => 'App\\Controller\\Admin\\AdminUserShowController::showUser'], ['fullName'], null, null, false, true, null]],
        704 => [[['_route' => 'all_userid_show', '_controller' => 'App\\Controller\\Admin\\AdminUserShowController::showUserId'], ['id'], null, null, false, true, null]],
        762 => [[['_route' => 'admin_calendar_show_lien_paiement', '_controller' => 'App\\Controller\\Admin\\AdminUserShowController::SendLienPayment'], ['purchaseId', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        785 => [[['_route' => 'app_agenda_by_category', '_controller' => 'App\\Controller\\AgendaByCategoryController::renderAgendaByCategory'], ['categoryTitle'], null, null, false, true, null]],
        814 => [[['_route' => 'app_activitie_show', '_controller' => 'App\\Controller\\ActivitieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        847 => [[['_route' => 'user_search', 'searchItem' => null, '_controller' => 'App\\Controller\\Admin\\AdminUserController::searchUser'], ['searchItem'], null, null, false, true, null]],
        873 => [[['_route' => 'user_searchname', 'searchItemName' => null, '_controller' => 'App\\Controller\\Admin\\AdminUserController::searchUserName'], ['searchItemName'], null, null, false, true, null]],
        900 => [[['_route' => 'user_searchphone', 'phone' => null, '_controller' => 'App\\Controller\\Admin\\AdminUserController::searchByPhone'], ['phone'], null, null, false, true, null]],
        927 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        950 => [[['_route' => 'cart_delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        971 => [[['_route' => 'cart_decrement', '_controller' => 'App\\Controller\\CartController::decrement'], ['id'], null, null, false, true, null]],
        1006 => [[['_route' => 'purchase_payment_form', '_controller' => 'App\\Controller\\Purchase\\PurchasePaymentController::showCardForm'], ['id'], null, null, false, true, null]],
        1033 => [[['_route' => 'purchase_payment_success', '_controller' => 'App\\Controller\\Purchase\\PurchasePaymentSuccessController::success'], ['id'], null, null, false, true, null]],
        1064 => [[['_route' => 'reset_pass', '_controller' => 'App\\Controller\\SecurityController::resetPass'], ['token'], null, null, false, true, null]],
        1104 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1125 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1172 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1187 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1208 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1222 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1233 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
