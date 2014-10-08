<?php

function add($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
    	return $a + $b . PHP_EOL;
	}
	else {
		error($a, $b);
		}
	}

function subtract($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
    	return $a - $b . PHP_EOL;
	}
	else {
		error($a, $b);	
	}
}

function multiply($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
    	return $a * $b . PHP_EOL;
	}
	else {
		error($a, $b);	
	}
}

function divide($a, $b) {
	if($b == 0) {
    	errorDiv($a, $b);
		}
	elseif(is_numeric($a) && is_numeric($b)) {
    	return $a / $b . PHP_EOL;
    	if($b == 0) {
    		errorDiv($a, $b);
		}
	}
	else {
		error($a, $b);	
	}
}

function modulus($a, $b) {
	if($b == 0) {
			errorDiv($a, $b);
		}
	elseif(is_numeric($a) && is_numeric($b)) {
    	return $a % $b . PHP_EOL;
    	
	}
	else {
		error($a, $b) . PHP_EOL;	
	}
}

function error($a, $b) {
	return "ERROR: Both {$a} and {$b} must be numbers" . PHP_EOL;
}

function errorDiv($a, $b) {
	return false . PHP_EOL;
	exit(0);
}

echo add(23, 8);

echo subtract(27, 10);

echo multiply(8, 53);

echo divide(64, 0);

echo modulus(64, 8);



?>