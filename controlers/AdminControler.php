<?php

include_once ROOT.'/models/Admin.php';

class AdminControler {

	public function actionIndex() {

		$login = '';
		$password = '';

		if (isset($_POST['submit'])) {
			$login = $_POST['login'];
			$password = $_POST['password'];

			$errors = false;

			if (!Admin::chekLogin($login)) {
				$errors[] = "Неверный логин";
			}
			if (!Admin::chekPass($password)) {
				$errors[] = "Неверный пароль";
			}

			$adminId = Admin::chekAdminDate($login, $password);

			if ($adminId == false) {
				$errors[] = "Неправильные данные";
			} else {
				Admin::auth($adminId);
				header("Location: /adminpanel");
			}

		}
		require_once(ROOT.'/views/admin/index.php');
		return true;
	}

	public function actionLogout() {
		unset($_SESSION['user']);
		header('Location: /');
	}
}
?>