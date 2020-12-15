	</div>
	<div class="author">
		<ul>
			<li><a href="/?auth=log">Авторизация</a></li>
			<li><a href="/?auth=reg">Регистрация</a></li>
			<li><a href="/?auth=reh">Выйти</a></li>
		</ul>
		<?php if(isset($_GET['auth']) && $_GET['auth'] == 'log'){ 
			require $_SERVER['DOCUMENT_ROOT'] . '/authoriz/logForm.php'; 
		}?>
		<?php if(isset($_GET['auth']) && $_GET['auth'] == 'reg'){ 
			require $_SERVER['DOCUMENT_ROOT'] . '/authoriz/regForm.php'; 
		}?>
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