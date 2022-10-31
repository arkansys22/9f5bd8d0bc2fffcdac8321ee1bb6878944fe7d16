<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
//Indonesia Language
$route['dashboard'] = "user/home";
$route['layanan-hukum'] = "user/layanan_hukum";
$route['profesi-hukum'] = "user/profesi";
$route['spesialis-hukum'] = "user/spesialis";
$route['logout'] = "user/logout";
$route['masuk'] = "User/login_id";
$route['daftar-praktisi-hukum'] = "User/register_hukum_id";
$route['daftar-pengguna-jasa'] = "User/register_pengguna_id";
$route['layanan/(:any)'] = "layanan/product_category/$1";
$route['layanan-detail/(:any)'] = "layanan/detail/$1";
$route['layanan/layanan_detail/detail'] = "layanan/layanan_detail";




$route['blogs'] = "blogs/index";
$route['blogs/(:any)'] = "blogs/detail/$1";
$route['404_override'] = 'Notfound';
$route['translate_uri_dashes'] = FALSE;
$route['petacrawl\.xml'] = "petacrawl";
