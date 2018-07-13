<?php

class Db {
	public static function getConnection() {
		$paramsPath = ROOT.'/config/conf_db.php';
		$params = include($paramsPath);

		$dsn = "mysql:host={$params['host']}; dbname={$params['dbname']}";
		$db = new PDO($dsn, $params['user'], $params['pass']);

		return $db;
	}
}
?>