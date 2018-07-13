<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Update</title>
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col">
				<form action="#" method="post" class="form-signin">
					<h1 class="h3 mb-3 font-weight-normal text-center">Редактирование задания</h1>
					<textarea class="form-control mt-2" type="text" name="text" placeholder="Текст" rows="10px"><?php echo $mission['text']; ?></textarea>
					<input class="form-control mt-2" type="text" name="autor" placeholder="Имя автора" value="<?php echo $mission['autor']; ?>" />
					<input class="form-control mt-2" type="email" name="email_autor" placeholder="Email автора" value="<?php echo $mission['email_autor']; ?>" />
					<div class="form-check">
						<input value="1" type="radio" class="form-check-input" name="complete" <?php if ($mission['complete'] == 1) echo "checked"; ?>>
						<label class="form-check-label mr-5" for="dropdownCheck">Выполнено</label>
						<input value="0" type="radio" class="form-check-input" name="complete" <?php if ($mission['complete'] == 0) echo "checked"; ?>>
						<label class="form-check-label" for="dropdownCheck">Невыполнено</label>
					</div>
					<input type="submit" name="submit" class="btn btn-primary mt-2" value="Сохранить">
				</form>
			</div>
		</div>
	</div>
</body>
</html>

