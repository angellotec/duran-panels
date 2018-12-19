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
|	https://codeigniter.com/user_guide/general/routing.html
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
| When you set this option to TRUE, it will replace ALL dashes with
| underscores in the controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/




$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['panels/supermacdaddy']	= 'panels/supermacdaddy/dashboard';
$route['careers']	= 'Home/careers';
$route['affiliate']	= 'Home/affiliate';
$route['affiliate-form']	= 'Home/affiliateForm';
$route['market-usa']	= 'Home/marketUsa';
$route['term-condition']	= 'Home/term_condition';

//mobile routs
$route['my-profile']	= 'WebService/getAllProfiles';
$route['online-users']	= 'WebService/onlineusers';
$route['friend-request']	= 'WebService/friendRequest';
//$route['ondemand-payments/(:any)']	= 'WebService/ondemandPayments';
$route['ondemand-payments']	= 'WebService/ondemandPayments';
$route['coins-stored']	= 'WebService/storeCoins';
$route['get-coins-stored']	= 'WebService/getCoins';
//$route['get-coins-stored/(:any)']	= 'WebService/getCoins';
$route['get-payout-details']	= 'WebService/payoutDetails';
//$route['get-payout-details/(:any)']	= 'WebService/payoutDetails';
$route['get-advertisemnet']	= 'WebService/getAdvertisement';
$route['complimentry-advertisemnet']	= 'WebService/complimentryAd';
$route['platinum-advertisement']	= 'WebService/platinumad';
$route['complimentary']	= 'WebService/complimentary';
$route['weekly-specials']	= 'WebService/weeklySpecials';

$route['reservations']	= 'WebService/reservations';
$route['appointments']	= 'WebService/appointments';
$route['notification-history']	= 'WebService/notificationHistory';
//$route['notification-history/(:any)']	= 'WebService/notificationHistory';
$route['user-verfication-individual']	= 'WebService/individualusers';
$route['gps-icon-activated']	= 'WebService/gpsIconActivated';
$route['online-drivers']	= 'WebService/onlineDrivers';
$route['get-gps-location']	= 'WebService/gpslocation';
$route['user-gps-location']	= 'WebService/usergpslocation';
$route['documemt-verify']	= 'WebService/documentVerfication';
$route['admin-permission-documemt-verify']	= 'WebService/adminpermision';

$route['online-stores']	= 'WebService/onlineStores';
$route['online-doctors']	= 'WebService/onlineDoctors';
$route['products']	= 'WebService/getProducts';
$route['add-cart']	= 'WebService/addCart';
$route['user-reservations']	= 'WebService/userReservations';
$route['get-friend-request']	= 'WebService/getFriendRequest';
$route['user-friend-or-not']	= 'WebService/userFriendOrNOt';
$route['confrim-request']	= 'WebService/confrimRequest';
$route['get-cart-product/(:num)']	= 'WebService/getCartProduct';
$route['remove-cart/(:num)']	= 'WebService/removeCart';

