<?php

include_once ROOT.'/models/Home.php';
include_once ROOT.'/route/Page.php';

class HomeControler {

	public function actionIndex() {
		$page = 1;
		$missionList = array();
		$missionList = Home::getMission();
		$total = Home::getTotal();
		$page = new Page($total, $page, Home::SHOW_BY_DEFAULT, 'page-');
		require_once(ROOT.'/views/home/index.php');
		return true;
	}

	public function actionPage($page) {
		$missionList = Home::getPage($page);
		$total = Home::getTotal();
		$page = new Page($total, $page, Home::SHOW_BY_DEFAULT, 'page-');
		require_once(ROOT.'/views/home/index.php');
		return true;
	}	
}
?>