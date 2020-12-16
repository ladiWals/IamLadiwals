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

function obrezka($str, $clippingSize = 12)
{
	if(strlen($str) > $clippingSize){
		return substr($str, 0, $clippingSize) . "...";
	} 
	return $str;
}

function arraySort($array, $key = 'sort', $sort = SORT_ASC)
{
	array_multisort(array_column($array, 'sort'), $sort, $array);
	return $array;
}

?>