<?php

$tryReg = false;

// Действия при нажатии кнопки "Зарегестрировать"
if (isset($_POST['regButton'])){
	require $_SERVER['DOCUMENT_ROOT'] . '/auth/authFunctions.php'; 
	$regResult = reggy($_POST['login'], $_POST['password'], $_POST['doublePass']);
	$tryReg = true;
}

?>

<!DOCTYPE html>
<html>

<head>
	<title> Регистрация </title>
	<link rel="stylesheet" href="/styles/authStyles.css" type="text/css">
</head>

<body>
	<div class="rectangle">
		<div class="canvas">
			<h1> Регистрация </h1>
			<form action="/auth/register" method="POST">
				<input name="login" placeholder="Логин">
				<input name="password" type="password" placeholder="Пароль">
				<input name="doublePass" type="password" placeholder="Подтвердите пароль">
				<input name="regButton" type="submit" value="Зарегестрировать">
			</form>
			<?php if($tryReg){ ?>
				<div class="<?=$regResult[0] ? 'authResult success' : 'authResult error'?>">
					<?=$regResult[1]?>
				</div>
				<?php } ?>
		</div>
		<div class="addition">
			Есть аккаунт? <a href="/auth/login"> Авторизоваться </a>
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