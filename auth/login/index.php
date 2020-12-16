<?php
/*

$auth = false;
$tryAuth = false;
if (isset($_POST['authorizate'])){
	require $_SERVER['DOCUMENT_ROOT'] . '/authoriz/authFunc.php'; 
	$tryAuth = true;
}

<?php if((isset($_GET['auth']) && $_GET['auth'] == 'log') || $authError){ 
			require $_SERVER['DOCUMENT_ROOT'] . '/authoriz/logForm.php'; 
		}?>
		<?php if(isset($_GET['auth']) && $_GET['auth'] == 'reg'){ 
			require $_SERVER['DOCUMENT_ROOT'] . '/authoriz/regForm.php'; 
		}?>

*/
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
				<input name="login" placeholder="Логин">
				<input name="password" type="password" placeholder="Пароль">
				<input type="submit" value="Войти">
			</form>
		</div>
		<div class="addition">
			Нет аккаунта? <a href="/auth/register"> Создать </a>
		</div>
		<div class="footer">
			<ul>
				<li>Русский</li>
				<li>About</li>
				<li><a href="/"> Главная </a></li>
			</ul>
		</div>
	</div>
</body>

</html>