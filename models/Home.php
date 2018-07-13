<?php

class Home {

	const SHOW_BY_DEFAULT = 3;

	public static function getPage($page = 1) {

		if ($page) {

			$page = intval($page);
			$ofset = ($page - 1) * self::SHOW_BY_DEFAULT;

			$db = Db::getConnection();

			$result = $db->query("SELECT id, text, autor, email_autor, complete FROM mission ORDER BY id DESC LIMIT ".self::SHOW_BY_DEFAULT." OFFSET ".$ofset);

			$missionList = array();
			$i = 0;
			while($row = $result->fetch()) {
				$missionList[$i]['id'] = $row['id'];
				$missionList[$i]['text'] = $row['text'];
				$missionList[$i]['autor'] = $row['autor'];
				$missionList[$i]['email_autor'] = $row['email_autor'];
				$missionList[$i]['complete'] = $row['complete'];
				$i++;
			}

			return $missionList;
		}
	}

	public static function getMission() {
		$db = Db::getConnection();

		$result = $db->query('SELECT id, text, autor, email_autor, complete FROM mission ORDER BY id DESC LIMIT '.self::SHOW_BY_DEFAULT);

		$i = 0;
		while($row = $result->fetch()) {
			$missionList[$i]['id'] = $row['id'];
			$missionList[$i]['text'] = $row['text'];
			$missionList[$i]['autor'] = $row['autor'];
			$missionList[$i]['email_autor'] = $row['email_autor'];
			$missionList[$i]['complete'] = $row['complete'];
			$i++;
		}
		return $missionList;
	}

	public static function getTotal() {
		$db = Db::getConnection();

		$result = $db->query('SELECT count(id) AS count FROM mission ORDER BY id');
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$row = $result->fetch();

		return $row['count'];
	}
}
?>