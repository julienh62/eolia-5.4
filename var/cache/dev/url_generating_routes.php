<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'filter' => [[], ['_controller' => 'App\\Controller\\ActivitieController::filterPrice'], [], [['text', '/filter']], [], [], []],
    'app_activitie_index' => [[], ['_controller' => 'App\\Controller\\ActivitieController::index'], [], [['text', '/activitie']], [], [], []],
    'activitie_all_char' => [[], ['_controller' => 'App\\Controller\\ActivitieController::listActivitieByChar'], [], [['text', '/activitieallchar']], [], [], []],
    'cataAll_show' => [[], ['_controller' => 'App\\Controller\\ActivitieController::listActivitieByCatamaran'], [], [['text', '/activitiescatamaran']], [], [], []],
    'charkidAll_show' => [[], ['_controller' => 'App\\Controller\\ActivitieController::listActivitieByCharKid'], [], [['text', '/activitiecharkid']], [], [], []],
    'app_admin_activitie_setting' => [[], ['_controller' => 'App\\Controller\\ActivitieSettingController::index'], [], [['text', '/admin/activitieSetting']], [], [], []],
    'app_admin_formChooseActivitie' => [[], ['_controller' => 'App\\Controller\\ActivitieSettingController::chooseActivitieForm'], [], [['text', '/admin/activitiesettingChoose']], [], [], []],
    'app_admin_activitie_setting_new' => [[], ['_controller' => 'App\\Controller\\ActivitieSettingController::new'], [], [['text', '/admin/activitieSettingNew']], [], [], []],
    'app_admin_activitie_index' => [[], ['_controller' => 'App\\Controller\\AdminActivitieController::index'], [], [['text', '/admin/activitie/']], [], [], []],
    'app_admin_activitie_show' => [['id'], ['_controller' => 'App\\Controller\\AdminActivitieController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/activitie']], [], [], []],
    'app_admin_activitie_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminActivitieController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/activitie']], [], [], []],
    'app_admin_activitie_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminActivitieController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/activitie']], [], [], []],
    'app_admin_staff_index' => [[], ['_controller' => 'App\\Controller\\AdminStaffController::index'], [], [['text', '/admin/staff/']], [], [], []],
    'app_admin_staff_new' => [[], ['_controller' => 'App\\Controller\\AdminStaffController::new'], [], [['text', '/admin/staff/new']], [], [], []],
    'app_admin_staff_show' => [['id'], ['_controller' => 'App\\Controller\\AdminStaffController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/staff']], [], [], []],
    'app_admin_staff_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminStaffController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/staff']], [], [], []],
    'app_admin_staff_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminStaffController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/staff']], [], [], []],
    'app_admin_staff_schedule_index' => [[], ['_controller' => 'App\\Controller\\AdminStaffScheduleController::index'], [], [['text', '/admin/staffschedule/']], [], [], []],
    'app_admin_staff_schedule_show' => [['id'], ['_controller' => 'App\\Controller\\AdminStaffScheduleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/staffschedule']], [], [], []],
    'app_admin_staff_schedule_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminStaffScheduleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/staffschedule']], [], [], []],
    'app_admin_staff_schedule_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminStaffScheduleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/staffschedule']], [], [], []],
    'app_admin_agenda' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminAgendaController::index'], [], [['text', '/admin/agenda']], [], [], []],
    'app_admin_calendar_index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminCalendarController::index'], [], [['text', '/calendar']], [], [], []],
    'app_admin_formChooseCalendar' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminCalendarController::chooseLocationForm'], [], [['text', '/admin/createCalendarChoose']], [], [], []],
    'app_admin_calendar_new' => [['typeCalendar'], ['_controller' => 'App\\Controller\\Admin\\AdminCalendarController::new'], [], [['variable', '/', '[^/]++', 'typeCalendar', true], ['text', '/admin/calendar/new']], [], [], []],
    'app_admin_calendar_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminCalendarController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/calendar']], [], [], []],
    'app_admin_calendar_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminCalendarController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/calendar']], [], [], []],
    'app_admin_calendar_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminCalendarController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/calendardelete']], [], [], []],
    'app_agenda' => [[], ['_controller' => 'App\\Controller\\AgendaController::index'], [], [['text', '/agenda']], [], [], []],
    'cart_add' => [['id'], ['_controller' => 'App\\Controller\\CartController::add'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/cart/add']], [], [], []],
    'cart_index' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart']], [], [], []],
    'cart_delete' => [['id'], ['_controller' => 'App\\Controller\\CartController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/cart/delete']], [], [], []],
    'cart_decrement' => [['id'], ['_controller' => 'App\\Controller\\CartController::decrement'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/cart/decrement']], [], [], []],
    'cart_delete_all' => [[], ['_controller' => 'App\\Controller\\CartController::deleteAll'], [], [['text', '/cart/deleteAll']], [], [], []],
    'app_contact_form' => [[], ['_controller' => 'App\\Controller\\ContactController::contactForm'], [], [['text', '/contact']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_presentation' => [[], ['_controller' => 'App\\Controller\\HomeController::presentation'], [], [['text', '/presentation']], [], [], []],
    'app_purchase_confirm' => [[], ['_controller' => 'App\\Controller\\Purchase\\PurchaseConfirmationController::confirm'], [], [['text', '/purchase/confirm']], [], [], []],
    'app_purchase' => [[], ['_controller' => 'App\\Controller\\Purchase\\PurchaseListController::index'], [], [['text', '/purchase']], [], [], []],
    'purchase_payment_form' => [['id'], ['_controller' => 'App\\Controller\\Purchase\\PurchasePaymentController::showCardForm'], ['id' => '[0-9]+'], [['variable', '/', '[0-9]+', 'id', true], ['text', '/purchase/pay']], [], [], []],
    'purchase_payment_success' => [['id'], ['_controller' => 'App\\Controller\\Purchase\\PurchasePaymentSuccessController::success'], ['id' => '[0-9]+'], [['variable', '/', '[0-9]+', 'id', true], ['text', '/purchase/terminate']], [], [], []],
    'app_registration' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'forgotten_password' => [[], ['_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], [], [['text', '/forgot-mdp']], [], [], []],
    'app_consultez-vos-mails' => [[], ['_controller' => 'App\\Controller\\SecurityController::index'], [], [['text', '/consultez-vos-mails']], [], [], []],
    'reset_pass' => [['token'], ['_controller' => 'App\\Controller\\SecurityController::resetPass'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/forgot-mdp']], [], [], []],
    'app_admin_ScheduleStaff_setting' => [[], ['_controller' => 'App\\Controller\\StaffScheduleSettingController::index'], [], [['text', '/admin/ScheduleStaffSetting']], [], [], []],
    'app_admin_scheduleStaffs_setting_new' => [[], ['_controller' => 'App\\Controller\\StaffScheduleSettingController::new'], [], [['text', '/admin/ScheduleStaffSettingNew']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'favicon' => [[], [], [], [['text', '/favicon.ico']], [], [], []],
    'app_activitie_show' => [['id'], ['_controller' => 'App\\Controller\\ActivitieController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/activitieshow']], [], [], []],
];