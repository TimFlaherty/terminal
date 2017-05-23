<?php
// Validation function to prevent SQL injection; 
// Use: $foo = noInject($foo);
	function noInject($str) {
		$bad = array(";", "'", " or ", " Or ", " OR ", " oR ", ")", "(");
		$good = str_replace($bad, "", $str);
		return $good;
	}
?>