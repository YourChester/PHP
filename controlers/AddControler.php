<?php

include_once ROOT.'/models/Add.php';

class AddControler {

	public function actionIndex() {
		$text = '';
		$autor = '';
		$email_autor = '';
		$result = false;

		if (isset($_POST['submit'])) {
			$text = $_POST['text'];
			$autor = $_POST['autor'];
			$email_autor = $_POST['email_autor'];

			$errors = false;

			if (!Add::chekText($text)) {
				$errors[] = "Слишком короткий текст";
			}
			if (!Add::chekAutor($autor)) {
				$errors[] = "Слишком короткое имя";
			}
			if (!Add::chekEmailAutor($email_autor)) {
				$errors[] = "Слишком короткие email";
			}

			if (!$errors == false) {
				$errors[] = "Неправильные данные";
			} else {
				Add::AddMission($text, $autor, $email_autor);
				header("Location: /");	
			}

		}
		
		require_once(ROOT.'/views/home/addmission.php');
		return true;
	}

}
?>