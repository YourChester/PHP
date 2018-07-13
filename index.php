<?php 

//1. Настройки
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	session_start();

//2. Подключение компонентов
	define('ROOT', dirname(__FILE__));
	require_once(ROOT.'/route/router.php');
	require_once(ROOT.'/models/DB.php');


//3. Вывод роутов

	$router = new Route();

	$router->run();