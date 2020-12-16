<?php

function trim($str, $clippingSize = 12)
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