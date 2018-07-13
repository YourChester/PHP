<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
	<title>AdminPanel</title>
</head>
<body>
	<div class="d-flex justify-content-between">
		<a class="btn btn-primary mt-3 mr-3" href="/">На сайт <i class="fas fa-arrow-right"></i></a>
		<a class="btn btn-primary mt-3 mr-3" href="/logout">Выход <i class="fas fa-sign-out-alt"></i></a>
	</div>
	<div class="col mt-2">
		<table class="table">
			<thead>
				<tr>
					<th>id</th>
					<th>Text</th>
					<th>Autor</th>
					<th>Email autor</th>
					<th>Complete</th>
					<th> </th>
					<th> </th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($missionAll as $mission): ?>
					<tr>
					<th><?php echo $mission['id']; ?></th>
					<th><?php echo $mission['text']; ?></th>
					<th><?php echo $mission['autor']; ?></th>
					<th><?php echo $mission['email_autor']; ?></th>
					<th>
						<?php if($mission['complete'] == 0):?>
							<i class="far fa-circle"></i>
						<?php endif; ?>
						<?php if ($mission['complete'] != 0):?>
							<i class="fas fa-check"></i>
						<?php endif; ?>
					</th>
					<th><a href="/adminpanel/update/<?php echo $mission['id']; ?>" title="изменить"><i class="far fa-edit"></i></a></th>
					<th><a href="/adminpanel/delete/<?php echo $mission['id']; ?>" title="удалить"><i class="fas fa-times"></i></a></th>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</body>
</html>