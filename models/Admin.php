<?php
class Admin {
	public static function chekAdminDate($login, $pass) {
		$db = Db::getConnection();

		$result = $db->prepare('SELECT * FROM admin WHERE login = :login AND pass = :pass');
		$result->bindParam(':login', $login, PDO::PARAM_STR);
		$result->bindParam(':pass', $pass, PDO::PARAM_STR);
		$result->execute();

		$user = $result->fetch();
		if ($user) {
			return $user['id'];
		}
		return false;
	}

	public static function auth($id) {
		$_SESSION['user'] = $id;
	}

	public static function chekLog() {
		if (isset($_SESSION['user'])) {
			return $_SESSION['user'];
		}
		header("Location: admin");
	}

	public static function chekLogin($login) {
		if (strlen($login) >= 5) {
			return true;
		}
		return false;
	}
	public static function chekPass($pass) {
		if (strlen($pass) >= 3) {
			return true;
		}
		return false;
	}
}
?>