<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
	<title>AddMission</title>
	<script type="text/javascript">
		window.onload = function(){
			v = document.getElementById("preview");
			if( v && document.getElementById('one') && document.getElementById('two') && document.getElementById('three') && document.getElementById('four') && document.getElementById('one_text') && document.getElementById('two_autor') && document.getElementById('three_email_autor') && document.getElementById('four_coplate')) {
				v.onclick = function(){
					var str = '<p>' + 'Текст' + '</p>';
					document.getElementById('one').innerHTML = str;
					var str1 = '<p>' + 'Автор' + '</p>';
					document.getElementById('two').innerHTML = str1;
					var str2 = '<p>' + 'Email автора' + '</p>';
					document.getElementById('three').innerHTML = str2;
					var str3 = '<p>' + 'Готовность' + '</p>';
					document.getElementById('four').innerHTML = str3;
					var str = '<p>' + document.forms[0].text.value + '</p>';
					document.getElementById('one_text').innerHTML = str;
					var str1 = '<p>' + document.forms[0].autor.value + '</p>';
					document.getElementById('two_autor').innerHTML = str1;
					var str2 = '<p>' + document.forms[0].email_autor.value + '</p>';
					document.getElementById('three_email_autor').innerHTML = str2;
					var str3 = '<p>' + '<i class="far fa-circle"></i>' + '</p>';
					document.getElementById('four_coplate').innerHTML = str3;
                    }
                }
            }
	</script>
</head>
<body class="">
	<div class="container mt-5 text-center">
		<div class="row">
			<div class="col">
				<?php if (isset($errors) && is_array($errors)): ?>
					<ul>
						<?php foreach ($errors as $error): ?>
							<li> - <?php echo $error; ?></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
				<form action="#" method="post" class="form-signin" enctype="multipart/form-data">
					<h1 class="h3 mb-3 font-weight-normal text-center">Добавление задания</h1>
					<textarea class="form-control mt-2" type="text" name="text" placeholder="Текст, не короче 20 символов" rows="10px"><?php echo $text; ?></textarea>
					<input class="form-control mt-2" type="text" name="autor" placeholder="Имя автора, не короче 2 символов" value="<?php echo $autor; ?>" />
					<input class="form-control mt-2" type="email" name="email_autor" placeholder="Email автора" value="<?php echo $email_autor; ?>" />
					<input type="button" id="preview" class="btn btn-primary mt-2" value="Предпросмотр">
					<input type="submit" name="submit" class="btn btn-primary mt-2" value="Добавить">
				</form>
					
			</div>
		</div>
	</div>
	<hr>
	<div class="row justify-content-center ">
			<div class="col-5" id="one">
			</div>
			<div class="col-2" id="two">
			</div>
			<div class="col-3" id="three">
			</div>
			<div class="col-1" id="four">
			</div>
			<div class="col-5" id="one_text">
			</div>
			<div class="col-2" id="two_autor">
			</div>
			<div class="col-3" id="three_email_autor">
			</div>
			<div class="col-1" id="four_coplate">
			</div>
	</div>
</body>
</html>