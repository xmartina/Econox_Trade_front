<?php
include_once (__DIR__ . '/db_connect.php');

$site_name = 'EconoXtrade Investment';
$site_url = 'https://econoxtrades.online/';
$base_link = 'econoxtrades.online';
$login_url = 'https://account.'.$base_link.'/?a=login';
$signup_url = 'https://account.'.$base_link.'/?a=signup';
$site_logo = $site_url . 'assets/images/logoIcon/logo.png';
$site_favicon = $site_url . 'assets/images/logoIcon/favicon.png';
$site_address = 'Our Address';
$site_email = 'contact@'.$base_link;
$site_phone = '+44 849 3432';

//page links
$about_url = $site_url.'pages/about';
$contact_url = $site_url.'pages/contact';
$terms_url = $site_url.'pages/terms';
$plans_url = $site_url.'pages/plans';