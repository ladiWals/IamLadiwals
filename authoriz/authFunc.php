<?php

require $_SERVER['DOCUMENT_ROOT'] . '/authoriz/login.php';
require $_SERVER['DOCUMENT_ROOT'] . '/authoriz/pass.php';

function loggy($log, $pas) 
{
	global $loginBD;
	global $passwordBD;
	$eml = empty($log);
	$emp = empty($pas);
	$logIndex = array_search($log, $loginBD);
	if ($eml && $emp){
		return "Введите логин и пароль";
	} elseif ($eml && !$emp){
		return "Введите логин";
	} elseif (!$eml && $emp){
		return "Введите пароль";
	} elseif (!$eml && !$emp && $logIndex == false){
		return "Пользователь не найден";
	} elseif (!$eml && !$emp && $logIndex !== false && $pas == $passwordBD[$logIndex]){
		return "Успешная Авторизация";
	} elseif (!$eml && !$emp && $logIndex !== false && $pas !== $passwordBD[$logIndex]){
		return "Неправильный пароль";
	} 
}

?>