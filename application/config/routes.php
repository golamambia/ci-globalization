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
$route['default_controller'] = 'globalpages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['index'] = 'globalpages/index';
$route['about-us'] = 'globalpages/about';
$route['careers'] = 'globalpages/careers';
$route['service'] = 'globalpages/service';
$route['global-employer-of-record-services'] = 'globalpages/globaleorservices';
$route['international-peo-service'] = 'globalpages/internationalpeoservice';
$route['global-talent-acquisition'] = 'globalpages/globaltalentacquisition';
$route['global-project-management-service'] = 'globalpages/globalprojectmanagementservice';
$route['global-payroll'] = 'globalpages/globalpayroll';
$route['hr-and-compliance-management-service'] = 'globalpages/hrandcompliancemanagementservice';
$route['multijurisdictional-service'] = 'globalpages/multijurisdictionalservice';
$route['our-global-reach'] = 'globalpages/ourglobalreach';
$route['blog'] = 'globalpages/blog';
$route['contact-us'] = 'globalpages/contactus';
$route['about-us'] = 'globalpages/aboutus';
$route['our-approach'] = 'globalpages/ourapproach';
$route['leadership'] = 'globalpages/leadership';
$route['why-work-with-us'] = 'globalpages/whyworkwithus';
$route['us-payroll'] = 'globalpages/uspayroll';
$route['locate-us'] = 'globalpages/locateus';
$route['setting-up-subsidiary-in-us'] = 'globalpages/settingupsubsidiaryinus';
$route['us-compensation-and-benefits'] = 'globalpages/uscompensationandbenefits';
$route['us-employer-of-record'] = 'globalpages/usemployerofrecord';
$route['us-visa-and-work-permit'] = 'globalpages/usvisaandworkpermit';
$route['work-enquires'] = 'globalpages/workenquires';
/*----------------------------Admin Authentication-----------------------------*/

$route['admin-login'] = 'Auth/login';
$route['admin-validate'] = 'Auth/adminLoginView';
$route['admin-logout'] = 'Auth/adminLogout';
/*----------------------------Admin pages-----------------------------*/

$route['dashboard'] = 'adminpages/index';
$route['main-page'] = 'adminpages/edit_main_page';
$route['service-page'] = 'adminpages/edit_services_page';
$route['globalreach-page'] = 'adminpages/edit_globalreach_page';
$route['about-page'] = 'adminpages/edit_about_page';
$route['all-about-page'] = 'adminpages/edit_all_about_page';
$route['carrer-page'] = 'adminpages/edit_carrer_page';
$route['contact-page'] = 'adminpages/edit_contact_us';
$route['user-contact-us'] = 'adminpages/contact_us';
$route['global-eor'] = 'adminpages/global_eor';
$route['global-peo'] = 'adminpages/global_peo';
$route['global-talent'] = 'adminpages/global_talent';
$route['global-project'] = 'adminpages/global_project';
$route['global-adpayroll'] = 'adminpages/global_payroll';
$route['global-hr'] = 'adminpages/global_hr';
$route['global-billing'] = 'adminpages/global_billing';
$route['global-mobility'] = 'adminpages/global_mobility';
$route['subscribe'] = 'adminpages/subscribe';
$route['request'] = 'adminpages/request';
/*----------------------------Admin crud models-----------------------------*/
$route['logo-upload'] = 'adminpages/logo_upload';
$route['update-banner-text'] = 'adminpages/update_banner_text';
$route['update-cbanner-text'] = 'adminpages/update_cbanner_text';
$route['update-globalbanner-text'] = 'adminpages/update_globalbanner_text';
$route['update-service-text'] = 'adminpages/update_service_text';
$route['update-about-text'] = 'adminpages/update_about_text';
$route['update-globalabout-text'] = 'adminpages/update_globalabout_text';
$route['update-today-text'] = 'adminpages/update_today_text';
$route['update-address-text'] = 'adminpages/update_address_text';
$route['add-service'] = 'adminpages/add_service';
$route['update-about-us'] = 'adminpages/update_about_us';
/*----------------------------service pages crud models-----------------------------*/
$route['service-image-upload'] = 'adminpages/service_image_upload';
$route['update-servicebanner-text'] = 'adminpages/update_servicebanner_text';
$route['update-servicesection-text'] = 'adminpages/update_servicesection_text';
$route['update-fsidepannel-text'] = 'adminpages/update_fsidepannel_text';
$route['update-ssidepannel-text'] = 'adminpages/update_ssidepannel_text';
$route['update-tsidepannel-text'] = 'adminpages/update_tsidepannel_text';