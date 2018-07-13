<?php

include_once ROOT.'/models/Home.php';
include_once ROOT.'/models/Sort.php';
include_once ROOT.'/route/Page.php';

class SortControler {

	public function actionSortByName($sort){
		$page = 1;
		$missionList = array();
		$missionList = Sort::SortByName($sort);
		$total = Sort::getTotal();
		$page = new Page($total, $page, Home::SHOW_BY_DEFAULT, 'page-');
		require_once(ROOT.'/views/home/indexsort.php');
		return true;
	}

	public function actionSortNamePage($sort, $page = 1) {
		$missionList = array();
		$missionList = Sort::getNameSort($sort, $page);
		$total = Sort::getTotal();
		$page = new Page($total, $page, Home::SHOW_BY_DEFAULT, 'page-');
		require_once(ROOT.'/views/home/indexsort.php');
		return true;
	}

	public function actionSortByEmail($sort){
		$page = 1;
		$missionList = array();
		$missionList = Sort::SortByEmail($sort);
		$total = Sort::getTotal();
		$page = new Page($total, $page, Home::SHOW_BY_DEFAULT, 'page-');
		require_once(ROOT.'/views/home/indexsort.php');
		return true;
	}

	public function actionSortEmailPage($sort, $page = 1) {
		$missionList = array();
		$missionList = Sort::getEmailSort($sort, $page);
		$total = Sort::getTotal();
		$page = new Page($total, $page, Home::SHOW_BY_DEFAULT, 'page-');
		require_once(ROOT.'/views/home/indexsort.php');
		return true;
	}

	public function actionSortByComplete($sort){
		$page = 1;
		$missionList = array();
		$missionList = Sort::SortByComplete($sort);
		$total = Sort::getTotal();
		$page = new Page($total, $page, Home::SHOW_BY_DEFAULT, 'page-');
		require_once(ROOT.'/views/home/indexsort.php');
		return true;
	}

	public function actionSortCompletePage($sort, $page = 1) {
		$missionList = array();
		$missionList = Sort::getCompleteSort($sort, $page);
		$total = Sort::getTotal();
		$page = new Page($total, $page, Home::SHOW_BY_DEFAULT, 'page-');
		require_once(ROOT.'/views/home/indexsort.php');
		return true;
	}
}
?>