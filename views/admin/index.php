<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Admin</title>
</head>
<body>
	<div class="mt-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-4">
					<?php if (isset($errors) && is_array($errors)): ?>
						<ul>
							<?php foreach ($errors as $error): ?>
							<li> - <?php echo $error; ?></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
					<form action="#" method="post" role="form">
						<h1 class="h3 mb-3 font-weight-normal text-center">Пожалуйста войдите</h1>
						<div class="form-group">
							<label for="login">Logine</label>
							<input class="form-control" type="login" name="login" placeholder="Логин" value="<?php echo $login; ?>" />
						</div>
						<div class="form-group">
							<label for="pass">Password</label>
							<input class="form-control" type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>" />
						</div>
						<input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Войти">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>