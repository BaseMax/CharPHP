<?php
/**
*
* @Name : CharPHP.php
* @Version : 1.0
* @Programmer : Max
* @Date : 2019-05-26
* @Released under : https://github.com/BaseMax/CharPHP/blob/master/LICENSE
* @Repository : https://github.com/BaseMax/CharPHP
*
**/
function starts($input,$need) {
	$length = strlen($need);
	return(substr($input,0,$length) === $need);
}
function ends($input,$need) {
	$length = strlen($need);
	if($length == 0) {
		return true;
	}
	return(substr($input,-$length) === $need);
}
function contains($string,$need) {
	return strpos($string,$need) !== false;
}
