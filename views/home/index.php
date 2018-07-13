<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
	<title>Home</title>
</head>
<body>
	<div class="d-flex justify-content-between">
		<a class="m-3 btn btn-primary " href="/">Сбросить сортировку <i class="fas fa-times"></i></a>
		<a class="m-3 btn btn-primary " href="/addmision">Добавить задачу <i class="far fa-edit"></i></a>
	</div>
		<div class="row justify-content-center ">
			<div class="col-5">
				<p>Текст</p>
			</div>
			<div class="col-2">
					<p><a href="sortByName/1">Автор</a></p>
			</div>
			<div class="col-3">
				<p><a href="sortByEmail/1">Email автора</a></p>
			</div>
			<div class="col-1">
				<p><a href="sortByComplete/1">Готовность</a></p>
			</div>
		</div>
		<hr>
		<div class="row justify-content-center ">
		<?php foreach ($missionList as $missionItem):?>
			<div class="col-5">
				<p><?php echo $missionItem['text']; ?></p>
			</div>
			<div class="col-2">
				<p><?php echo $missionItem['autor']; ?></p>
			</div>
			<div class="col-3">
				<p><?php echo $missionItem['email_autor']; ?></p>
			</div>
			<div class="col-1">
				<p><?php if($missionItem['complete'] == 0):?>
					<i class="far fa-circle"></i>
				<?php endif; ?>
				<?php if ($missionItem['complete'] != 0):?>
					<i class="fas fa-check"></i>
				<?php endif; ?></p>
			</div>
		<?php endforeach;?>
		</div>
	<div class="mt-3 pagination justify-content-center">
		<?php echo $page->get(); ?>
	</div>
</body>
</html>