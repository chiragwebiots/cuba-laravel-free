<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['register' => false, 'verify' => false]);

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();
Route::group(['middleware' => ['auth'], 'as' => 'admin.', 'prefix' => 'admin'], function () 
{
    // Dashboard
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // Users
    Route::put('user/status/{id}', [App\Http\Controllers\Admin\UserController::class, 'status'])->name('user.status');
    Route::resource('user', App\Http\Controllers\Admin\UserController::class);
    Route::get('user/remove-image/{id}', [App\Http\Controllers\Admin\UserController::class, 'removeImage'])->name('user.removeImage');

    // Roles
    Route::resource('role', App\Http\Controllers\Admin\RoleController::class);

    // Pages
    Route::put('page/status/{id}', [App\Http\Controllers\Admin\PageController::class, 'status'])->name('page.status');
    Route::resource('page', App\Http\Controllers\Admin\PageController::class);

    // Tags
    Route::put('tag/status/{id}', [App\Http\Controllers\Admin\TagController::class, 'status'])->name('tag.status');
    Route::resource('tag', App\Http\Controllers\Admin\TagController::class);

    // Blog
    Route::put('blog/status/{id}', [App\Http\Controllers\Admin\BlogController::class, 'status'])->name('blog.status');
    Route::resource('blog', App\Http\Controllers\Admin\BlogController::class);
    Route::get('blog/remove-image/{id}', [App\Http\Controllers\Admin\BlogController::class, 'removeImage'])->name('blog.removeImage');

    // Category
    Route::post('category/update-orders', [App\Http\Controllers\Admin\CategoryController::class, 'updateOrders'])->name('category.update.orders');
    Route::resource('category', App\Http\Controllers\Admin\CategoryController::class);

    // User_profile
    Route::get('edit-profile', [App\Http\Controllers\Admin\UserController::class, 'editProfile'])->name('user.edit-profile');
    Route::get('get-states', [App\Http\Controllers\Admin\UserController::class, 'getStates'])->name('user.get-states');
    Route::post('update-profile', [App\Http\Controllers\Admin\UserController::class, 'updateProfile'])->name('user.update-profile');


// Dashboard
Route::view('default-dashboard', 'admin.dashboard.index')->name('default_dashboard');

//widgets
Route::view('general-widget', 'widgets.general_widget')->name('general_widget');
Route::view('chart-widget', 'widgets.chart_widget')->name('chart_widget');

//page_layout
Route::view('box-layout', 'page_layouts.box_layout')->name('box_layout');
Route::view('rtl-layout', 'page_layouts.rtl_layout')->name('rtl_layout');
Route::view('dark-layout', 'page_layouts.dark_layout')->name('dark_layout');
Route::view('footer-dark', 'page_layouts.footer_dark')->name('footer_dark');
// Route::view('footer-fixed', 'page_layouts.footer_fixed')->name('footer_fixed');

//projects
// Route::view('project-details', 'projects.details_project')->name('details_project');
// Route::view('project-list', 'projects.list_project')->name('list_project');
// Route::view('project-create', 'projects.create_project')->name('create_project');

 //file manager
//  Route::view('file-manager', 'file_manager')->name('file_manager');

 //kanban board
//  Route::view('kanban', 'kanban')->name('kanban');

 //ecommerce
//  Route::view('add-products', 'ecommerce.products.add_products')->name('add_products');
//  Route::view('products-grid', 'ecommerce.products.products_grid')->name('products_grid');
//  Route::view('list-products', 'ecommerce.products.list_products')->name('list_products');
//  Route::view('products-details', 'ecommerce.products.products_details')->name('products_details');
//  Route::view('categories-pages', 'ecommerce.category_page')->name('category_page');
//  Route::view('seller-list', 'ecommerce.seller.seller_list')->name('seller_list');
//  Route::view('seller-details', 'ecommerce.seller.seller_details')->name('seller_details');
//  Route::view('order-history', 'ecommerce.order.order_history')->name('order_history');
//  Route::view('order-details', 'ecommerce.order.order_details')->name('order_details');
//  Route::view('invoice-1', 'ecommerce.invoices.invoice_1')->name('invoice_1');
//  Route::view('invoice-2', 'ecommerce.invoices.invoice_2')->name('invoice_2');
//  Route::view('invoice-3', 'ecommerce.invoices.invoice_3')->name('invoice_3');
//  Route::view('invoice-4', 'ecommerce.invoices.invoice_4')->name('invoice_4');
//  Route::view('invoice-5', 'ecommerce.invoices.invoice_5')->name('invoice_5');
//  Route::view('invoice-6', 'ecommerce.invoices.invoice_6')->name('invoice_6');
//  Route::view('cart', 'ecommerce.cart')->name('cart');
//  Route::view('wish-list', 'ecommerce.wish_list')->name('wish_list');
//  Route::view('checkout', 'ecommerce.checkout')->name('checkout');
//  Route::view('manage-review', 'ecommerce.manage_review')->name('manage_review');
//  Route::view('settings', 'ecommerce.settings')->name('settings');

//mail box
// Route::view('mail-box', 'mail_box')->name('mail_box');

//chat
// Route::view('chat-private', 'chats.chat_private')->name('chat_private');
// Route::view('chat-group', 'chats.chat_group')->name('chat_group');

//users
// Route::view('profile', 'users.user_profile')->name('user_profile');
// Route::view('add_user', 'users.add_user')->name('add_user');
// Route::view('list-users', 'users.user_list')->name('user_list');
// Route::view('cards', 'users.user_cards')->name('user_cards');
// Route::view('permissions-roles', 'users.role_permission')->name('role_permission');

// reports
// Route::view('products-reports', 'reports.products')->name('products_reports');
// Route::view('sales-reports', 'reports.sales')->name('sales_reports');
// Route::view('sales-return', 'reports.sales_return')->name('sales_return');
// Route::view('customer-order', 'reports.customer_order')->name('customer_order');

 //bookmark
Route::view('bookmark', 'bookmark')->name('bookmark');

//contacts
// Route::view('contacts', 'contacts')->name('contacts');

//tasks
    // Route::view('task', 'task')->name('task');

//calendar
// Route::view('calendar-basic', 'calendar_basic')->name('calendar_basic');

//social_app
// Route::view('social-app', 'social_app')->name('social_app');

//to_do
// Route::view('to-do', 'to_do')->name('to_do');

//search_result
// Route::view('search', 'search')->name('search');

//forms -> form-control
Route::view('form-validation', 'forms.form_controls.form_validation')->name('form_validation');
Route::view('base-input', 'forms.form_controls.base_input')->name('base_input');
Route::view('radio-checkbox-control', 'forms.form_controls.radio_checkbox_control')->name('radio_checkbox_control');
Route::view('input-group', 'forms.form_controls.input_group')->name('input_group');

//Tables -> bootstrap_tables
Route::view('bootstrap-basic-table', 'tables.bootstrap_tables.bootstrap_basic_table')->name('bootstrap_basic_table');
Route::view('table-components', 'tables.bootstrap_tables.table_components')->name('table_components');

//Tables -> data_tables
Route::view('datatable-basic-init', 'tables.data_tables.datatable_basic_init')->name('datatable_basic_init');


//ui_kits
Route::view('typography', 'ui_kits.typography')->name('typography');
Route::view('avatars', 'ui_kits.avatars')->name('avatars');
// Route::view('divider', 'ui_kits.divider')->name('divider');
Route::view('helper-classes', 'ui_kits.helper_classes')->name('helper_classes');
Route::view('grid', 'ui_kits.grid')->name('grid');
Route::view('pills-tag', 'ui_kits.tag_pills')->name('tag_pills');
Route::view('progress-bar', 'ui_kits.progress_bar')->name('progress_bar');
Route::view('modal', 'ui_kits.modal')->name('modal');
Route::view('alert', 'ui_kits.alert')->name('alert');
Route::view('popover', 'ui_kits.popover')->name('popover');
// Route::view('placeholders', 'ui_kits.placeholders')->name('placeholders');
Route::view('tooltip', 'ui_kits.tooltip')->name('tooltip');
Route::view('dropdown', 'ui_kits.dropdown')->name('dropdown');
Route::view('according', 'ui_kits.according')->name('according');
 Route::view('tabs', 'ui_kits.tabs')->name('tabs');
// Route::view('offcanvas', 'ui_kits.offcanvas')->name('offcanvas');
// Route::view('navigate-links', 'ui_kits.navigate_links')->name('navigate_links');
Route::view('list', 'ui_kits.list')->name('list');

//bonus_ui
Route::view('scrollable', 'bonus_ui.scrollable')->name('scrollable');
Route::view('tree', 'bonus_ui.tree')->name('tree');
Route::view('toasts', 'bonus_ui.toasts')->name('toasts');
Route::view('block-ui', 'bonus_ui.block_ui')->name('block_ui');
Route::view('rating', 'bonus_ui.rating')->name('rating');
Route::view('dropzone', 'bonus_ui.dropzone')->name('dropzone');
Route::view('tour', 'bonus_ui.tour')->name('tour');
Route::view('sweet-alert2', 'bonus_ui.sweet_alert2')->name('sweet_alert2');
Route::view('animation-modal', 'bonus_ui.modal_animated')->name('modal_animated');
Route::view('owl-carousel', 'bonus_ui.owl_carousel')->name('owl_carousel');
Route::view('ribbons', 'bonus_ui.ribbons')->name('ribbons');
Route::view('pagination', 'bonus_ui.pagination')->name('pagination');
Route::view('scroll-spy', 'bonus_ui.scroll_spy')->name('scroll_spy');
Route::view('breadcrumb', 'bonus_ui.breadcrumb')->name('breadcrumb');
Route::view('range-slider', 'bonus_ui.range_slider')->name('range_slider');
Route::view('ratios', 'bonus_ui.ratios')->name('ratios');
Route::view('image-cropper', 'bonus_ui.image_cropper')->name('image_cropper');
Route::view('basic-card', 'bonus_ui.basic_card')->name('basic_card');
Route::view('creative-card', 'bonus_ui.creative_card')->name('creative_card');
Route::view('draggable-card', 'bonus_ui.draggable_card')->name('draggable_card');
Route::view('timeline', 'bonus_ui.timeline')->name('timeline');

//animation
Route::view('animate', 'animations.animate')->name('animate');
Route::view('scroll-reveal', 'animations.scroll_reveal')->name('scroll_reveal');
Route::view('aos', 'animations.aos')->name('aos');
Route::view('tilt', 'animations.tilt')->name('tilt');
Route::view('wow', 'animations.wow')->name('wow');
Route::view('flash-icon', 'animations.flash_icon')->name('flash_icon');

//icons
Route::view('flag-icon', 'icons.flag_icon')->name('flag_icon');
Route::view('font-awesome', 'icons.font_awesome')->name('font_awesome');
Route::view('ico-icon', 'icons.ico_icon')->name('ico_icon');
Route::view('themify-icon', 'icons.themify_icon')->name('themify_icon');
Route::view('feather-icon', 'icons.feather_icon')->name('feather_icon');
Route::view('whether-icon', 'icons.whether_icon')->name('whether_icon');

//buttons
Route::view('buttons', 'buttons')->name('buttons');

//charts
Route::view('chart-apex', 'charts.chart_apex')->name('chart_apex');
Route::view('chart-google', 'charts.chart_google')->name('chart_google');
Route::view('chart-sparkline', 'charts.chart_sparkline')->name('chart_sparkline');
Route::view('chart-flot', 'charts.chart_flot')->name('chart_flot');
Route::view('chart-knob', 'charts.chart_knob')->name('chart_knob');
Route::view('chart-morris', 'charts.chart_morris')->name('chart_morris');
Route::view('chartjs', 'charts.chartjs')->name('chartjs');
Route::view('chartist', 'charts.chartist')->name('chartist');
Route::view('chart-peity', 'charts.chart_peity')->name('chart_peity');

// landing page

//sample-page
Route::view('sample-page', 'sample_page')->name('sample_page');

// internationalization
Route::view('internationalization', 'internationalization')->name('internationalization');

// Starter kit

//error_page
Route::view('error-403', 'error_pages.error_403')->name('error_403');
Route::view('error-404', 'error_pages.error_404')->name('error_404');
Route::view('error-500', 'error_pages.error_500')->name('error_500');

//authentication
Route::view('login', 'authentication.login')->name('login');
Route::view('sign-up', 'authentication.sign_up')->name('sign_up');
 Route::view('forget-password', 'authentication.forget_password')->name('forget_password');
Route::view('reset-password', 'authentication.reset_password')->name('reset_password');


//email_templates
Route::view('basic-template', 'email_templates.basic_template')->name('basic_template');


});


// Refresh Data
Route::get('/refresh-data', function () {
    Artisan::call('cuba:refresh');
    return back();
});