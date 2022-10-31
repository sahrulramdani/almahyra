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
$routes->setDefaultController('Homepage');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
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
$routes->get('/', 'HomepageController::index');
$routes->get('/detail/(:any)', 'HomepageController::detail/$1');

$routes->get('/panel', 'AuthController::index');

$routes->get('/dashboard', 'DashboardController::index');

// LAYOUT
$routes->get('/dashboard/header-desc', 'LayoutController::index');
$routes->get('/dashboard/header-desc/new', 'LayoutController::newHeader');
$routes->post('/dashboard/header-desc/save', 'LayoutController::saveHeader');
$routes->get('/dashboard/header-desc/delete/(:any)', 'LayoutController::deleteHeader/$1');
$routes->get('/dashboard/header-desc/edit/(:any)', 'LayoutController::editHeader/$1');
$routes->post('/dashboard/header-desc/update', 'LayoutController::updateHeader');

$routes->get('/dashboard/pendaftaran', 'LayoutController::pendaftaran');
$routes->get('/dashboard/pendaftaran/new', 'LayoutController::newPendaftaran');
$routes->post('/dashboard/pendaftaran/save', 'LayoutController::savePendaftaran');
$routes->get('/dashboard/pendaftaran/delete/(:any)', 'LayoutController::deletePendaftaran/$1');
$routes->get('/dashboard/pendaftaran/edit/(:any)', 'LayoutController::editPendaftaran/$1');
$routes->post('/dashboard/pendaftaran/update', 'LayoutController::updatePendaftaran');

$routes->get('/dashboard/testimoni', 'LayoutController::testimoni');
$routes->get('/dashboard/testimoni/new', 'LayoutController::newTestimoni');
$routes->post('/dashboard/testimoni/save', 'LayoutController::saveTestimoni');
$routes->get('/dashboard/testimoni/delete/(:any)', 'LayoutController::deleteTestimoni/$1');
$routes->get('/dashboard/testimoni/edit/(:any)', 'LayoutController::editTestimoni/$1');
$routes->post('/dashboard/testimoni/update', 'LayoutController::updateTestimoni');

$routes->get('/dashboard/no-telp', 'LayoutController::notelp');
$routes->post('/dashboard/no-telp/update', 'LayoutController::updateNotelp');


$routes->get('/dashboard/product', 'ProductController::index');
$routes->get('/dashboard/product/new', 'ProductController::newProduct');
$routes->post('/dashboard/product/save', 'ProductController::saveProduct');
$routes->get('/dashboard/product/delete/(:any)', 'ProductController::deleteProduct/$1');
$routes->get('/dashboard/product/edit/(:any)', 'ProductController::editProduct/$1');
$routes->post('/dashboard/product/update', 'ProductController::updateProduct');

$routes->get('/dashboard/user', 'UserController::index');

$routes->get('/dashboard/pembimbing', 'PembimbingController::index');
$routes->get('/dashboard/pembimbing/new', 'PembimbingController::newPembimbing');
$routes->post('/dashboard/pembimbing/save', 'PembimbingController::savePembimbing');
$routes->get('/dashboard/pembimbing/delete/(:any)', 'PembimbingController::deletePembimbing/$1');
$routes->get('/dashboard/pembimbing/edit/(:any)', 'PembimbingController::editPembimbing/$1');
$routes->post('/dashboard/pembimbing/update', 'PembimbingController::updatePembimbing');


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