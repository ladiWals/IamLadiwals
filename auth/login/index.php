<?php

$auth = false;
$tryAuth = false;

// Действия при нажатии кнопки "Войти"
if (isset($_POST['loginButton'])){
	require $_SERVER['DOCUMENT_ROOT'] . '/auth/authFunctions.php'; 
	$logResult = loggy($_POST['login'], $_POST['password']);
	$tryAuth = true;
}

?>

<!DOCTYPE html>
<html>

<head>
	<title> Авторизация </title>
	<link rel="stylesheet" href="/styles/authStyles.css" type="text/css">
</head>

<body>

	<div class="rectangle">

		<div class="canvas">
			<h1> Войти </h1>
			<form action="/auth/login" method="POST">
				<input name="login" placeholder="Логин" value = "<?= isset($_POST['login']) ? $_POST['login'] : ""?>">
				<input name="password" type="password" placeholder="Пароль"
					value = "<?= isset($_POST['password']) ? $_POST['password'] : ""?>">
				<input name="loginButton" style="padding: 12px 102.5px;" type="submit" value="Войти">
			</form>
			<?php if ($tryAuth){ ?>
				<div class="<?=$logResult[0] ? 'authResult success' : 'authResult error'?>">
					<?=$logResult[1]?>
				</div>
				<?php } ?>
		</div>

		<div class="addition">
			Нет аккаунта? <a href="/auth/register"> Создать </a>
		</div>

		<div class="footer">
			<ul>
				<li><a href="/images/armjan.jpeg"> 
					Русский 
				</a></li>
				<li><a href="/images/about.jpeg"> About </a></li>
				<li><a href="/"> Главная </a></li>
			</ul>
		</div>

	</div>

</body>

</html>