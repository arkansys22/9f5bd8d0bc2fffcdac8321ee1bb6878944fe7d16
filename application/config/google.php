<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------
| 
| To get API details you have to create a Google Project
| at Google API Console (https://console.developers.google.com)
| 
|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/
$config['google']['client_id']        = '696328915160-o0ricc540sljlbghb6n498tgv27bni5j.apps.googleusercontent.com';
$config['google']['client_secret']    = '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';
$config['google']['redirect_uri']     = 'http://localhost/sistem_sekolah/masuk';
$config['google']['application_name'] = 'Login to Legia';
$config['google']['api_key']          = '';
$config['google']['scopes']           = array();