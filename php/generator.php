<?php
function md5rand($length) {
	$pass1 = strtoupper(md5(rand(0, 1000000)));
	$rand_start = rand(5,strlen($pass1));
	if($rand_start == strlen($pass1)) {
		$rand_start = 1;
	}
	$pass2 = strtoupper(substr(md5($pass1), $rand_start, $length));
	return $pass2;
}
?>