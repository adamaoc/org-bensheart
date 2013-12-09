<?php
session_start();
require_once '../../configs/dbconfig.php';
// Create a global configuration
$GLOBALS['config'] = array(
	'mysql' => array(
		'host' => $host,
		'username' => $username,
		'password' => $password,
		'db' => $dbname
	),
	'remember' => array(
		'cookie_name'	=> 'hash',
		'cookie_expiry' =>  604800
	),
	'session' => array(
		'session_name'	=> 'user',
		'token_name'	=> 'token'
	),
	'website' => array(
		'id' => 1001
	)
);

// Autoload classes
function autoload($class) {
	require_once '../../classes/' . $class . '.php';
}
spl_autoload_register('autoload');

// Include functions
require_once '../../functions/sanitize.php';

$Website = new Website;
$Site = $Website->getWebsite()->first();
$Info = $Website->info()->first();

// Check for users that have requested to be remembered
// if(Cookie::exists(Config::get('remember/cookie_name'))) {
// 	$hash = Cookie::get(Config::get('remember/cookie_name'));
// 	$hashCheck = DB::getInstance()->get('users_session', array('hash', '=', $hash));

// 	if($hashCheck->count()) {
// 		$user = new User($hashCheck->first()->user_id);
// 		$user->login();
// 	}

// }
