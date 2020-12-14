	</div>
	<div class="author">
		<ul>
			<li><a href="/?auth=log">Авторизация</a></li>
			<li><a href="/?auth=reg">Регистрация</a></li>
			<li><a href="/?auth=reh">Выйти</a></li>
		</ul>
		<?php if($_GET['auth'] == 'log') {?>
		<form action="/" method="POST">
			<input id="login_id" size="12" name="login" placeholder="Логин">
			<input id="password_id" size="12" name="password" type="password" placeholder="Пароль">
			<input type="submit" value="Войти" name="authorizate"></td>
		</form>
		<?php }?>
	</div>
</main>
<footer>
		<br>Владислав Александрович Юркевич<br><hr>
		<ul>
			<li>Мой web-проект</li>
			<li>I-am-LadiWalS</li>
			<li>создан 12 декабря</li>
			<li>2020-2020</li>
			<li>привет, ты уже крут?</li>	
			<li>ladiwals@gmail.com</li>
		</ul>
	</footer>
</body>