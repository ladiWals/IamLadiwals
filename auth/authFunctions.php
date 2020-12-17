<?php

require $_SERVER['DOCUMENT_ROOT'] . '/auth/login.php';
require $_SERVER['DOCUMENT_ROOT'] . '/auth/pass.php';

function loggy($log, $pas) 
{
	global $loginDB;
	global $passwordDB;
	$eml = empty($log);
	$emp = empty($pas);
	$logIndex = array_search($log, $loginDB);

	if ($eml && $emp){
		return [false, "Введите логин и пароль"];
	} elseif ($eml && !$emp){
		return [false, "Введите логин"];
	} elseif (!$eml && $emp){
		return [false, "Введите пароль"];
	} elseif (!$eml && !$emp && $logIndex == false){
		return [false, "Пользователь не найден"];
	} elseif (!$eml && !$emp && $logIndex !== false && $pas !== $passwordDB[$logIndex]){
		return [false, "Неправильный пароль"];
	} elseif (!$eml && !$emp && $logIndex !== false && $pas == $passwordDB[$logIndex]){
		return [true, "Успешная Авторизация"];
	} 
}

function reggy($log, $pass, $replay)
{
	global $loginDB;
	global $passwordDB;
	$minLen = 8;
	$emptyFields = empty($log) || empty($pass) || empty($replay);
	$lenCheck = strlen($log) >= $minLen && strlen($pass) >= $minLen;

	if ($emptyFields){
		return [false, "Заполните все поля!"];
	} elseif(!$emptyFields && !$lenCheck){
		return [false, "Логин и пароль не менее {$minLen} символов!"];
	} elseif(!$emptyFields && array_search($log, $loginDB) !== false){
		return [false, "Логин уже сущестует, придумайте другой!"];
	} elseif(!$emptyFields && $pass != $replay){
		return [false, "Пароли не совпадают!"];
	} elseif(!$emptyFields && $pass == $replay && $lenCheck){
		return [true, "Успешная регистрация!"];
	}
}

?>