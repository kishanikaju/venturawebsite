<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/success-stories', 'Home::success_stories');
$routes->get('/blog-list', 'BlogControl::bloglist');
$routes->get('/blogs/(.+?)$', 'BlogControl::blogdetails');
$routes->get('/privacypolicy', 'CmsControl::privacy');
$routes->get('/about-us', 'CmsControl::about');
$routes->get('/services', 'Home::services');
$routes->get('/contact', 'Home::contact');
$routes->get('/join-out-team', 'Home::join_team');
$routes->get('/services-we', 'Home::services_we');
$routes->get('/enquiry', 'Home::enquiry');
$routes->get('/samples', 'Home::portfolio');
$routes->post('/sendmail', 'Home::sendmail');
//admin urls
$routes->get('/admin/login','admin\LoginController::login');
$routes->get('/admin/logout','admin\LoginController::logout');
$routes->get('/admin/register','admin\LoginController::register');
$routes->post('admin/registerprocess','admin\LoginController::registerprocess');
$routes->get('/admin/user-list','admin\LoginController::userlist');
$routes->get('/admin/edit/(:num)','admin\LoginController::edit/$1');
$routes->post('admin/update/(:num)','admin\LoginController::update/$1');
$routes->get('/admin/delete/(:num)','admin\LoginController::delete/$1');
$routes->post('/admin/loginprocess','admin\LoginController::adminlogin');
//add form access
$routes->get('/admin/add-access','admin\AccessController::index');
$routes->post('/admin/add-accessform-process','admin\AccessController::addaccessformprocess');
$routes->get('/admin/access-form-list','admin\AccessController::accessform_list');
$routes->get('/admin/access-form-delete/(:num)','admin\AccessController::delete/$1');
$routes->get('/admin/access-form-edit/(:num)','admin\AccessController::accessform_edit/$1');
$routes->post('/admin/access-form-update/(:num)','admin\AccessController::update_accessformprocess/$1');
$routes->get('/admin/privileges-access','admin\AccessController::privilege');
$routes->post('/admin/privileges-access','admin\AccessController::privilegeprocess');
$routes->get('/admin/privileges-list','admin\AccessController::privileges_list');
$routes->get('/admin/privilege-delete/(:num)','admin\AccessController::pre_delete/$1');
//blog category
$routes->get('/admin/blog-category-add','admin\BlogcategoryController::blogcatadd');
$routes->post('/admin/blog-category-add','admin\BlogcategoryController::addblogcat');
$routes->get('/admin/blog-category-list','admin\BlogcategoryController::blogcategory_list');
$routes->get('/admin/blog-category-delete/(:num)','admin\BlogcategoryController::delete/$1');
$routes->get('/admin/blog-category-edit/(:num)','admin\BlogcategoryController::blog_cat_edit/$1');
$routes->post('/admin/blog-category-update/(:num)','admin\BlogcategoryController::blog_cat_update/$1');
//blog Add
$routes->get('/admin/add-blog','admin\BlogaddController::blogadd');
$routes->post('/admin/add-blog','admin\BlogaddController::addblogprocess');
$routes->get('/admin/blog-list','admin\BlogaddController::blog_list');
$routes->get('/admin/blog-delete/(:num)','admin\BlogaddController::delete/$1');
$routes->get('/admin/blog-edit/(:num)','admin\BlogaddController::blog_edit/$1');
$routes->post('/admin/blog-update/(:num)','admin\BlogaddController::blog_update/$1');
//add CMS
$routes->get('/admin/add-cms','admin\CmsController::index');
$routes->post('/admin/add-cms-process','admin\CmsController::addcmsprocess');
$routes->get('/admin/cms-list','admin\CmsController::cmsform_list');
$routes->get('/admin/cms-delete/(:num)','admin\CmsController::delete/$1');
$routes->get('/admin/cms-edit/(:num)','admin\CmsController::cmsform_edit/$1');
$routes->post('/admin/cms-update/(:num)','admin\CmsController::update_cmsformprocess/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
