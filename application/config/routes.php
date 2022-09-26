<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['login'] = "paneladmin/login";
$route['works'] = "product/index";
$route['layanan/(:any)'] = "layanan/product_category/$1";
$route['layanan-detail/(:any)'] = "layanan/detail/$1";
$route['about'] = "about/index";
$route['gallery'] = "gallery/index";
$route['layanan/layanan_detail/detail'] = "layanan/layanan_detail";


$route['blogs'] = "blogs/index";
$route['blogs/(:any)'] = "blogs/detail/$1";
$route['404_override'] = 'Notfound';
$route['translate_uri_dashes'] = FALSE;
$route['petacrawl\.xml'] = "petacrawl";
