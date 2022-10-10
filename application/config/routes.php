<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
//Indonesia Language
$route['masuk'] = "User/login_id";
$route['daftar'] = "User/register_pengacara_id";
$route['daftar_notaris'] = "User/register_notaris_id";
$route['daftar_perusahaan'] = "User/register_perusahaan_id";
$route['layanan/(:any)'] = "layanan/product_category/$1";
$route['layanan-detail/(:any)'] = "layanan/detail/$1";
$route['layanan/layanan_detail/detail'] = "layanan/layanan_detail";

$route['dashboard-perusahaan'] = "Perusahaan/index";


$route['blogs'] = "blogs/index";
$route['blogs/(:any)'] = "blogs/detail/$1";
$route['404_override'] = 'Notfound';
$route['translate_uri_dashes'] = FALSE;
$route['petacrawl\.xml'] = "petacrawl";
