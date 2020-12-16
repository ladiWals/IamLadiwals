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
				<input type="submit" value="Зарегестрировать">
			</form>
		</div>
		<div class="addition">
			Есть аккаунт? <a href="/auth/login"> Авторизоваться </a>
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