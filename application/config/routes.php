<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['assets/(:any)'] = 'assets/$1';
$route['signup'] = 'auth/userSignup';
$route['login'] = '';
$route['logout'] = 'auth/userLogout';
$route['user-profile'] = 'auth/userProfile';
$route['search'] = 'home/search';
$route['activate'] = 'auth/userActivate';
$route['activate-user'] = 'auth/activateProfile';
$route['update-password'] = 'auth/updatePassword';
$route['update-profile'] = 'auth/profileUpdate';
$route['contactus/post'] = 'home/contactPost';
$route['([a-z0-9-]+)/([a-z0-9-]+)/([a-z-]+)'] = 'home/search';
$route['([a-z0-9-]+)/([a-z0-9-]+)/([a-z0-9-]+-[0-9]{1,10})/([a-z-]+)'] = 'home/schoolDetail/$1-$2';
//$route['([a-z0-9-]+)/([a-z0-9-]+)/([a-z-]+)'] = 'home/schoolDetail2/$1';
$route['apps'] = 'download/downloadApp';
$route['permlink'] = 'home/getLocation';
$route['list-your-school'] = 'home/listSchool';
$route['save-school'] = 'home/saveSchool';
$route['post-your-requirement'] = 'home/postRequirement';
$route['save-requirement'] = 'home/saveRequirement';
$route['post-rating-review'] = 'home/userRatingReview';
$route['about-us'] = 'home/aboutUs';
$route['career'] = 'home/joinUs';
$route['our-team'] = 'home/ourTeam';
$route['contact-us'] = 'home/contactUs';
$route['privacy'] = 'home/privacy';
$route['terms'] = 'home/terms';
$route['share-social-login'] = 'home/socialLoginData';
$route['contactus/showcontact'] = 'home/showSchoolContact';



