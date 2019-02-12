<?php

defined('BASEPATH') or exit('No direct script access allowed');
/*
 * myIgniter basic config
 *
 * Author : Devidea
 */

$config['version'] = '1.0.0'; // myigniter version

// Site
$config['site'] = [
    'title' => 'UF Core App', // Default Title entire page
    'favicon' => 'assets/img/favicon-96x96.png', // Default Favicon
    'logo' => 'assets/logo_ummi.png' // Default Logo
];

// aauth config
$config['login'] = [
    'title'           => 'UF Core App',
    'welcome'         => 'Silahkan Login',
    'enable_forgot'   => false,
    'enable_signup'   => false
];

// Debugbar
$config['debugbar'] = true; // True show debugbar
