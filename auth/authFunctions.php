<?php

require $_SERVER['DOCUMENT_ROOT'] . '/auth/login.php';
require $_SERVER['DOCUMENT_ROOT'] . '/auth/pass.php';

function loggy($log, $pas) 
{
	global $loginBD;
	global $passwordBD;
	$eml = empty($log);
	$emp = empty($pas);
	$logIndex = array_search($log, $loginBD);

	if ($eml && $emp){
		return [false, "Введите логин и пароль"];
	} elseif ($eml && !$emp){
		return [false, "Введите логин"];
	} elseif (!$eml && $emp){
		return [false, "Введите пароль"];
	} elseif (!$eml && !$emp && $logIndex == false){
		return [false, "Пользователь не найден"];
	} elseif (!$eml && !$emp && $logIndex !== false && $pas !== $passwordBD[$logIndex]){
		return [false, "Неправильный пароль"];
	} elseif (!$eml && !$emp && $logIndex !== false && $pas == $passwordBD[$logIndex]){
		return [true, "Успешная Авторизация"];
	} 
}

?>