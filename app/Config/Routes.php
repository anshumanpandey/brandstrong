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
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->group('owner', function($routes){
	$routes->get('login', 'Owner::login');
	$routes->get('logout', 'Owner::logout');
	$routes->post('checklogin', 'Owner::checkLogin');
	
	$routes->get('maincate', 'Owner::maincate');
	$routes->post('maincate/insert', 'Owner::maincateInsert');
	$routes->get('maincate/edit/(:num)', 'Owner::maincateEditForm/$1');
	$routes->post('maincate/edit', 'Owner::maincateEdit');

	$routes->get('subcate', 'Owner::subcate');
	$routes->post('subcate/insert', 'Owner::subcateInsert');
	$routes->get('subcate/edit/(:num)', 'Owner::subcateEditForm/$1');
	$routes->post('subcate/edit', 'Owner::subcateEdit');

	$routes->get('feedback', 'Owner::feedback');
	
	$routes->get('flightblog', 'Owner::flightblog');
	$routes->post('flightblog/insert', 'Owner::flightblogInsert');
	$routes->get('flightblog/edit/(:num)', 'Owner::flightblogEditForm/$1');
	$routes->post('flightblog/edit', 'Owner::flightblogEdit');

	$routes->get('customer', 'Owner::customer');

	$routes->get('staff', 'Owner::staff');
	$routes->post('staff/insert', 'Owner::staffInsert');
	$routes->get('staff/edit/(:num)', 'Owner::staffEditForm/$1');
	$routes->post('staff/edit', 'Owner::staffEdit');

	$routes->get('profile', 'Owner::profile');
	$routes->post('profile', 'Owner::profileEdit');

	$routes->get('changepass', 'Owner::changepass');
	$routes->post('changepass', 'Owner::changepassEdit');

	$routes->get('question', 'Owner::question');
	$routes->post('question/insert', 'Owner::questionInsert');
	$routes->get('question/edit/(:num)', 'Owner::questionEditForm/$1');
	$routes->post('question/edit', 'Owner::questionEdit');
	
	$routes->get('job', 'Owner::job');
	$routes->get('job/manage/(:num)', 'Owner::jobManage/$1');
	$routes->post('job/manage', 'Owner::jobAssignStaff');
	$routes->post('job/manage/work', 'Owner::jobWork');
	
	$routes->post('deletedata', 'Owner::deleteData');
});

$routes->get('/', 'Customer::login');
$routes->get('/mail', 'Customer::mail');
	
$routes->group('/', function($routes){
	$routes->get('logout', 'Customer::logout');
	$routes->post('checklogin', 'Customer::checkLogin');
	$routes->get('forget', 'Customer::forget');
	$routes->post('checkforget', 'Customer::checkforget');
	$routes->post('checkotp', 'Customer::checkotp');
	$routes->post('newpass', 'Customer::newpass');

	$routes->get('signup', 'Customer::signup');
	$routes->post('signup', 'Customer::signupData');

	$routes->get('dashboard', 'Customer::dashboard');
	$routes->get('profile', 'Customer::profile');
	$routes->get('profile/edit', 'Customer::profileEditForm');
	$routes->post('profile', 'Customer::profileEdit');
	$routes->get('jobs', 'Customer::jobs');
	$routes->get('jobs/(:num)', 'Customer::jobsStatus/$1');
	$routes->get('jobs/status/(:num)/(:num)', 'Customer::jobsStatusChange/$1/$2');
	$routes->get('jobs/details/(:num)', 'Customer::jobsDetails/$1');
	$routes->get('hangar', 'Customer::hangar');
	$routes->get('hangar/(:num)', 'Customer::hangarStatus/$1');
	$routes->get('feedback', 'Customer::feedback');
	$routes->get('feedback/form', 'Customer::feedbackForm');
	$routes->post('feedback', 'Customer::feedbackData');
	$routes->get('request', 'Customer::request');
	$routes->post('request', 'Customer::requestInsert');
	$routes->get('request/edit/(:num)', 'Customer::requestEditForm/$1');
	$routes->post('request/edit', 'Customer::requestEdit');
	$routes->get('request/info/(:num)', 'Customer::requestInfo/$1');
	$routes->get('flightblog', 'Customer::flightblog');
	$routes->get('notification/settings', 'Customer::notificationSettings');
	$routes->get('upgrades', 'Customer::upgrades');

	$routes->get('changepass', 'Customer::changepass');
	$routes->post('changepass', 'Customer::changepassEdit');
		
	$routes->post('maincate/insert', 'Customer::maincateInsert');
	$routes->get('maincate/edit/(:num)', 'Customer::maincateEditForm/$1');
	$routes->post('maincate/edit', 'Customer::maincateEdit');
	
	$routes->post('deletedata', 'Customer::deleteData');
});


/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
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
