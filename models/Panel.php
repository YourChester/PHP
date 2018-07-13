<?php

class Panel
{
	public static function getAll() {
		$db	= Db::getConnection();

		$result = $db->query('SELECT id, text, autor, email_autor, complete FROM mission ORDER BY id');

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

	public static function getOne($id){
		$db	= Db::getConnection();

		$sql = 'SELECT * FROM mission WHERE id ='.$id;
		$result = $db->query($sql);
		$mission = $result->fetch();
		return $mission;
	}

	public static function getUpdate($id, $setting) {
		$db	= Db::getConnection();

		$sql = 'UPDATE mission SET text = :text, autor = :autor, email_autor = :email_autor, complete = :complete WHERE id = :id';
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		$result->bindParam(':text', $setting['text'], PDO::PARAM_INT);
		$result->bindParam(':autor', $setting['autor'], PDO::PARAM_INT);
		$result->bindParam(':email_autor', $setting['email_autor'], PDO::PARAM_INT);
		$result->bindParam(':complete', $setting['complete'], PDO::PARAM_INT);
		return $result->execute();
	}

	public static function getDelete($id) {
		$db	= Db::getConnection();

		$sql = 'DELETE FROM mission WHERE id = :id';
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		return $result->execute();
	}
}
?>