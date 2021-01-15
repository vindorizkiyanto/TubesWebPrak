<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->get('/', 'Main');
$routes->get('/admin', 'Main::admin');
$routes->get('/admin/peminjamanbuku', 'Main::adminpeminjamanbuku');
$routes->get('/admin/verifikasipeminjaman', 'Main::adminverifikasipeminjaman');
$routes->get('/admin/verifikasipengembalian', 'Main::adminverifikasipengembalian');
$routes->get('/admin/tambahdata', 'Main::halamantambahdata');
$routes->delete('/admin/buku/delete/(:num)', 'Buku::delete/$1');
$routes->get('/admin/buku/delete/(:any)', 'Buku::error');
$routes->get('/admin/editdata/(:any)', 'Main::halamaneditdata/$1');
$routes->get('/listbukudipinjam/(:num)', 'Main::listbukudipinjam/$1');
/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
