<?php

$nothing = null;
$something = " ";
$array = [1, 2, 3];
//unset($nothing);

if(isset($snothing)) {
	echo "\$nothing is SET" . PHP_EOL;
}
else {
	echo "\$nothing is EMPTY" . PHP_EOL;
}

if(isset($something)) {
	echo "\$something is SET" . PHP_EOL;
}

$array = serialize($array);
	echo $array . PHP_EOL;

$array = unserialize($array);
	print_r($array) . PHP_EOL;


?>