<?php

class Add {
	public static function AddMission($text, $autor, $email_autor) {
		$db = Db::getConnection();

		$sql = "INSERT INTO mission (text, autor, email_autor) VALUES (:text, :autor, :email_autor)";

		$result = $db->prepare($sql);
		$result->bindParam(':text', $text, PDO::PARAM_STR);
		$result->bindParam(':autor', $autor, PDO::PARAM_STR);
		$result->bindParam(':email_autor', $email_autor, PDO::PARAM_STR);

		return $result->execute();
	}

	public static function chekText($text) {
		if (strlen($text) >= 20) {
			return true;
		}
		return false;
	}
	public static function chekAutor($autor) {
		if (strlen($autor) >= 2) {
			return true;
		}
		return false;
	}

	public static function chekEmailAutor($email_autor) {
		if (strlen($email_autor) >= 10) {
			return true;
		}
		return false;
	}
}
?>
