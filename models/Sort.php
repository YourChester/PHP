<?php

class Sort {

	const SHOW_BY_DEFAULT = 3;

	public static function SortByName($sort) {

		if ($sort) {

			$sortId = intval($sort);
			if ($sortId == 1) {
				$sql = 'SELECT id, text, autor, email_autor, complete FROM mission ORDER BY autor ASC LIMIT '.self::SHOW_BY_DEFAULT;
			} 
			if ($sortId == 2){
				$sql = 'SELECT id, text, autor, email_autor, complete FROM mission ORDER BY autor DESC LIMIT '.self::SHOW_BY_DEFAULT;
			}

			$db = Db::getConnection();

			$result = $db->query($sql);

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
	public static function getNameSort($sort, $page = 1) {

		if ($page) {

			$page = intval($page);
			$ofset = ($page - 1) * self::SHOW_BY_DEFAULT;

			$sortId = intval($sort);
			if ($sortId == 1) {
				$sql = "SELECT id, text, autor, email_autor, complete FROM mission ORDER BY autor ASC LIMIT ".self::SHOW_BY_DEFAULT." OFFSET ".$ofset;
			} 
			if ($sortId == 2){
				$sql = "SELECT id, text, autor, email_autor, complete FROM mission ORDER BY autor DESC LIMIT ".self::SHOW_BY_DEFAULT." OFFSET ".$ofset;
			}

			$db = Db::getConnection();

			$result = $db->query($sql);

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

	public static function SortByEmail($sort) {

		if ($sort) {

			$sortId = intval($sort);
			if ($sortId == 1) {
				$sql = 'SELECT id, text, autor, email_autor, complete FROM mission ORDER BY email_autor ASC LIMIT '.self::SHOW_BY_DEFAULT;
			} 
			if ($sortId == 2){
				$sql = 'SELECT id, text, autor, email_autor, complete FROM mission ORDER BY email_autor DESC LIMIT '.self::SHOW_BY_DEFAULT;
			}

			$db = Db::getConnection();

			$result = $db->query($sql);

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

	public static function getEmailSort($sort, $page = 1) {

		if ($page) {

			$page = intval($page);
			$ofset = ($page - 1) * self::SHOW_BY_DEFAULT;

			$sortId = intval($sort);
			if ($sortId == 1) {
				$sql = "SELECT id, text, autor, email_autor, complete FROM mission ORDER BY email_autor ASC LIMIT ".self::SHOW_BY_DEFAULT." OFFSET ".$ofset;
			} 
			if ($sortId == 2){
				$sql = "SELECT id, text, autor, email_autor, complete FROM mission ORDER BY email_autor DESC LIMIT ".self::SHOW_BY_DEFAULT." OFFSET ".$ofset;
			}

			$db = Db::getConnection();

			$result = $db->query($sql);

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

		public static function SortByComplete($sort) {

		if ($sort) {

			$sortId = intval($sort);
			if ($sortId == 1) {
				$sql = 'SELECT id, text, autor, email_autor, complete FROM mission ORDER BY complete ASC LIMIT '.self::SHOW_BY_DEFAULT;
			} 
			if ($sortId == 2){
				$sql = 'SELECT id, text, autor, email_autor, complete FROM mission ORDER BY complete DESC LIMIT '.self::SHOW_BY_DEFAULT;
			}

			$db = Db::getConnection();

			$result = $db->query($sql);

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

	public static function getCompleteSort($sort, $page = 1) {

		if ($page) {

			$page = intval($page);
			$ofset = ($page - 1) * self::SHOW_BY_DEFAULT;

			$sortId = intval($sort);
			if ($sortId == 1) {
				$sql = "SELECT id, text, autor, email_autor, complete FROM mission ORDER BY complete ASC LIMIT ".self::SHOW_BY_DEFAULT." OFFSET ".$ofset;
			} 
			if ($sortId == 2){
				$sql = "SELECT id, text, autor, email_autor, complete FROM mission ORDER BY complete DESC LIMIT ".self::SHOW_BY_DEFAULT." OFFSET ".$ofset;
			}

			$db = Db::getConnection();

			$result = $db->query($sql);

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

	public static function getTotal() {
		$db = Db::getConnection();

		$result = $db->query('SELECT count(id) AS count FROM mission ORDER BY id');
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$row = $result->fetch();

		return $row['count'];
	}
}