<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->match(['get', 'post'],'Login', 'UserController::login', ['filter' => 'IfNotLoggedIn']);


/* NOMi - Side Navigation Bar Routes - Start */
$routes->get('/', 'GradeBookController::index'); // temp
// $routes->get('/', 'HomeController::index');
$routes->get('GradeBook', 'GradeBookController::index');
$routes->get('AccountBook', 'HomeController::tempComingSoon');
$routes->get('TimeTable', 'HomeController::tempComingSoon');
/* NOMi - Side Navigation Bar Routes - End */

/* NOMi - Profile Setting Routes - Start */
$routes->get('Profile', 'HomeController::tempComingSoon');
$routes->get('Settings', 'HomeController::tempComingSoon');
$routes->get('Logout', 'UserController::logout');
/* NOMi - Profile Setting Routes - End */

/* NOMi - Subject Card Routes - Start */
$routes->get('ClassWork', 'HomeController::tempComingSoon');
$routes->get('HomeWork', 'HomeController::tempComingSoon');
$routes->get('DiscussionBoard', 'HomeController::tempComingSoon');
$routes->get('Announcements', 'HomeController::tempComingSoon');
/* NOMi - Subject Card Routes - End */

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
