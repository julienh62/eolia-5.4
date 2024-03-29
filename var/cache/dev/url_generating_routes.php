<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'admin_activity_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminCalendarController::activityEdit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin']], [], [], []],
    'filter' => [[], ['_controller' => 'App\\Controller\\CalendarController::filterPrice'], [], [['text', '/filter']], [], [], []],
    'app_activitie_index' => [[], ['_controller' => 'App\\Controller\\ActivitieController::index'], [], [['text', '/activity']], [], [], []],
    'app_admin_activitie_index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminActivitieController::index'], [], [['text', '/admin/activity/']], [], [], []],
    'app_admin_activitie_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminActivitieController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/activity']], [], [], []],
    'app_admin_activitie_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminActivitieController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/activity']], [], [], []],
    'app_admin_activitie_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminActivitieController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/activity']], [], [], []],
    'app_admin_agenda' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminAgendaController::index'], [], [['text', '/admin/agenda']], [], [], []],
    'admin_agenda_detail' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminAgendaDetailController::showusercalendarpurchase'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/agendadetail']], [], [], []],
    'admin_agenda_list_print' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminAgendaDetailController::calendarshowlistuserpurchase'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/agendalisttoprint']], [], [], []],
    'admin_calendar_add_user' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminCalendarAddUserController::calendarAddUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/calendaradduser']], [], [], []],
    'admin_calendar_add_user_quantity' => [['id', 'newUserId'], ['_controller' => 'App\\Controller\\Admin\\AdminCalendarAddUserQuantityController::calendarAddUserQuantity'], [], [['variable', '/', '[^/]++', 'newUserId', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/calendaradduserquantity']], [], [], []],
    'app_admin_formChooseCalendar' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminCalendarController::chooseLocationForm'], [], [['text', '/admin/createCalendarChoose']], [], [], []],
    'app_admin_calendar_new' => [['typeCalendar'], ['_controller' => 'App\\Controller\\Admin\\AdminCalendarController::new'], [], [['variable', '/', '[^/]++', 'typeCalendar', true], ['text', '/admin/calendar/new']], [], [], []],
    'app_admin_calendar_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminCalendarController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/calendar']], [], [], []],
    'admin_calendar_edit' => [['id', 'typeCalendar'], ['_controller' => 'App\\Controller\\Admin\\AdminCalendarController::edit'], [], [['variable', '/', '[^/]++', 'typeCalendar', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/edit']], [], [], []],
    'admin_calendar_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminCalendarController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/calendardelete']], [], [], []],
    'app_admin_category_index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminCategoryController::index'], [], [['text', '/admin/category']], [], [], []],
    'app_admin_category_image' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminCategoryController::catImage'], [], [['text', '/categoryimages']], [], [], []],
    'app_admin_category_new' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminCategoryController::new'], [], [['text', '/admin/category/new']], [], [], []],
    'app_admin_category_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminCategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], [], []],
    'app_admin_category_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminCategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], [], []],
    'app_admin_category_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminCategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], [], []],
    'app_admin_category_setting_index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminCategorySettingController::index'], [], [['text', '/admin/categorysetting/']], [], [], []],
    'app_admin_category_setting_new' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminCategorySettingController::new'], [], [['text', '/admin/categorysetting/new']], [], [], []],
    'app_admin_category_setting_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminCategorySettingController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/categorysetting']], [], [], []],
    'app_admin_category_setting_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminCategorySettingController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/categorysetting']], [], [], []],
    'app_admin_category_setting_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminCategorySettingController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/categorysetting']], [], [], []],
    'admin_user_purchase' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminPurchaseUserController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/purchase/user']], [], [], []],
    'admin_staff_index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminStaffController::index'], [], [['text', '/admin/staff/']], [], [], []],
    'admin_staff_new' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminStaffController::new'], [], [['text', '/admin/staff/new']], [], [], []],
    'admin_staff_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminStaffController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/staff']], [], [], []],
    'admin_staff_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminStaffController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/staff']], [], [], []],
    'admin_staff_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminStaffController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/staff']], [], [], []],
    'app_admin_staff_schedule_index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminStaffScheduleController::index'], [], [['text', '/admin/staffschedule/']], [], [], []],
    'app_admin_staff_schedule_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminStaffScheduleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/staffschedule']], [], [], []],
    'app_admin_staff_schedule_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminStaffScheduleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/staffschedule']], [], [], []],
    'app_admin_staff_schedule_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminStaffScheduleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/staffschedule']], [], [], []],
    'admin_user_index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminUserController::index'], [], [['text', '/admin/user']], [], [], []],
    'admin_user_new' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminUserController::new'], [], [['text', '/admin/user/new']], [], [], []],
    'admin_user_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminUserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], [], []],
    'user_search' => [['searchItem'], ['searchItem' => null, '_controller' => 'App\\Controller\\Admin\\AdminUserController::searchUser'], [], [['variable', '/', '[^/]++', 'searchItem', true], ['text', '/search']], [], [], []],
    'user_searchname' => [['searchItemName'], ['searchItemName' => null, '_controller' => 'App\\Controller\\Admin\\AdminUserController::searchUserName'], [], [['variable', '/', '[^/]++', 'searchItemName', true], ['text', '/searchname']], [], [], []],
    'user_searchphone' => [['phone'], ['phone' => null, '_controller' => 'App\\Controller\\Admin\\AdminUserController::searchByPhone'], [], [['variable', '/', '[^/]++', 'phone', true], ['text', '/searchphone']], [], [], []],
    'admin_user_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminUserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user/delete']], [], [], []],
    'app_showusers' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminUserShowController::index'], [], [['text', '/admin/usershow']], [], [], []],
    'all_user_show' => [['fullName'], ['_controller' => 'App\\Controller\\Admin\\AdminUserShowController::showUser'], [], [['variable', '/', '[^/]++', 'fullName', true], ['text', '/admin/usershowall']], [], [], []],
    'all_userid_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminUserShowController::showUserId'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/useridshowall']], [], [], []],
    'admin_calendar_show_lien_paiement' => [['purchaseId', 'id'], ['_controller' => 'App\\Controller\\Admin\\AdminUserShowController::SendLienPayment'], [], [['variable', '/', '[^/]++', 'id', true], ['variable', '/', '[^/]++', 'purchaseId', true], ['text', '/admin//admin/calendarshowlienpaiement']], [], [], []],
    'app_purchase_item' => [[], ['_controller' => 'App\\Controller\\Admin\\PurchaseItem\\PurchaseItemController::index'], [], [['text', '/admin/purchaseitem']], [], [], []],
    'delete_purchaseitem' => [['id'], ['_controller' => 'App\\Controller\\Admin\\PurchaseItem\\PurchaseItemController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/purchaseitemdelete']], [], [], []],
    'app_agenda' => [[], ['_controller' => 'App\\Controller\\AgendaController::index'], [], [['text', '/agenda']], [], [], []],
    'app_calendar_filter' => [[], ['_controller' => 'App\\Controller\\CalendarController::index'], [], [['text', '/calendarfilter']], [], [], []],
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
    'app_agenda_by_category' => [['categoryTitle'], ['_controller' => 'App\\Controller\\AgendaByCategoryController::renderAgendaByCategory'], [], [['variable', '/', '[^/]++', 'categoryTitle', true], ['text', '/agenda']], [], [], []],
    'app_activitie_show' => [['id'], ['_controller' => 'App\\Controller\\ActivitieController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/activitieshow']], [], [], []],
];
