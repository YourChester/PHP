<?php

include_once ROOT.'/models/Admin.php';
include_once ROOT.'/models/Panel.php';

class PanelControler {
	public function actionIndex() {
		$adminId = Admin::chekLog();

		$missionAll = Panel::getAll();

		require_once(ROOT.'/views/admin/adminpanel.php');
		return true;
	}

	public function actionUpdate($id) {
		$mission = Panel::getOne($id);
		if (isset($_POST['submit'])){
			$setting['text'] = $_POST['text'];
			$setting['autor'] = $_POST['autor'];
			$setting['email_autor'] = $_POST['email_autor'];
			$setting['complete'] = $_POST['complete'];

			Panel::getUpdate($id, $setting);
			header('Location: /adminpanel');
		}
		require_once(ROOT.'/views/admin/update.php');
		return true;
	}

	public function actionDelete($id) {
		if (isset($_POST['submit'])){
			Panel::getDelete($id);
			header('Location: /adminpanel');
		}
	require_once(ROOT.'/views/admin/delete.php');
	return true;
	}
}
?>