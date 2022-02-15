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
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['about-us'] = 'home/about';
$route['contact'] = 'home/contact';
$route['web-development'] = 'home/web';
$route['cms-development'] = 'home/cms';
$route['ecommerce-development'] = 'home/ecommercedev';
$route['app-development'] = 'home/appdev';
$route['ios-development'] = 'home/ios';
$route['psd-html'] = 'home/psd';
$route['local-seo'] = 'home/local_seo';
$route['startup-seo'] = 'home/startup_seo';
$route['enterprise-seo'] = 'home/enterprise_seo';
$route['ecommerce-seo'] = 'home/ecommerce_seo';
$route['mobile-seo'] = 'home/mobile_seo';
$route['free-seo-analysis'] = 'home/free_seo';
$route['facebook-marketing'] = 'home/facebook_marketing';
$route['instagram-marketing'] = 'home/instagram_marketing';
$route['twitter-marketing'] = 'home/twitter_marketing';
$route['linkedin-marketing'] = 'home/linkedin';
$route['influncer-marketing'] = 'home/influncer';
$route['facebook-ads'] = 'home/facebook_ads';
$route['google-ads'] = 'home/google_ads';
$route['pinterest-ads'] = 'home/pinterest_ads';
$route['linkedin-ads'] = 'home/linkedin_ads';
$route['instagram-ads'] = 'home/instagram_ads';
$route['youtube-ads'] = 'home/youtube_ads';
$route['pinterest-marketing'] = 'home/pinterest_marketing';

$route['Admin'] = 'admin/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
