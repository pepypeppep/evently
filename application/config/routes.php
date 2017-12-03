<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "login";
$route['404_override'] = 'error';

/*********** PENDAFTARAN DEFINED ROUTES *******************/
$route['pendaftaranListing/(:any)'] = 'pendaftaran/pendaftaranListing/$1';
$route['pendaftaranListings'] = 'pendaftaran/pendaftaranListings';
$route['diterima/(:num)'] = 'pendaftaran/diterima/$1';
$route['ditolak/(:num)'] = 'pendaftaran/ditolak/$1';

/*********** MAHASISWA DEFINED ROUTES *******************/
$route['mahasiswaListing'] = 'mahasiswa/mahasiswaListing';

/*********** EVENT DEFINED ROUTES *******************/
$route['eventListing'] = 'event/eventListing';
$route['addNewEvent'] = "event/addNew";
$route['addNewEventNow'] = "event/addNewEvent";
$route['editOldEvent/(:num)'] = "event/editOld/$1";
$route['editEvent'] = "event/editEvent";

/*********** SIE DEFINED ROUTES *******************/
$route['sieListing'] = 'sie/sieListing';
$route['addNewSie'] = "sie/addNew";
$route['addNewSieNow'] = "sie/addNewSie";
$route['editOldSie/(:num)'] = "sie/editOld/$1";
$route['editSie'] = "sie/editSie";

/*********** MAPPING EVENT DEFINED ROUTES *******************/
$route['mappingListing'] = 'mapping/mappingListing';
$route['addNewMapping'] = "mapping/addNew";
$route['addNewMappingNow'] = "mapping/addNewMapping";
$route['editOldMapping/(:num)'] = "mapping/editOld/$1";
$route['editMapping'] = "mapping/editMapping";

/*********** THREAD DEFINED ROUTES *******************/
$route['threadListing'] = 'thread/threadListing';
$route['addNewThread'] = "thread/addNew";
$route['addNewThreadNow'] = "thread/addNewThread";
$route['editOldThread/(:num)'] = "thread/editOld/$1";
$route['editThread'] = "thread/editThread";


/*********** USER DEFINED ROUTES *******************/

$route['loginMe'] = 'login/loginMe';
$route['dashboard'] = 'user';
$route['logout'] = 'user/logout';
$route['userListing'] = 'user/userListing';
$route['userListing/(:num)'] = "user/userListing/$1";
$route['addNew'] = "user/addNew";

$route['addNewUser'] = "user/addNewUser";
$route['editOld'] = "user/editOld";
$route['editOld/(:num)'] = "user/editOld/$1";
$route['editUser'] = "user/editUser";
$route['deleteUser'] = "user/deleteUser";
$route['loadChangePass'] = "user/loadChangePass";
$route['changePassword'] = "user/changePassword";
$route['pageNotFound'] = "user/pageNotFound";
$route['checkEmailExists'] = "user/checkEmailExists";

$route['forgotPassword'] = "login/forgotPassword";
$route['resetPasswordUser'] = "login/resetPasswordUser";
$route['resetPasswordConfirmUser'] = "login/resetPasswordConfirmUser";
$route['resetPasswordConfirmUser/(:any)'] = "login/resetPasswordConfirmUser/$1";
$route['resetPasswordConfirmUser/(:any)/(:any)'] = "login/resetPasswordConfirmUser/$1/$2";
$route['createPasswordUser'] = "login/createPasswordUser";

/* End of file routes.php */
/* Location: ./application/config/routes.php */