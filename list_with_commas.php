<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $physicistsString);

$famousFakePhysicists = humanizedList($physicistsArray, true);

function humanizedList($array, $alphabetize = false) {
	if($alphabetize) {
		asort($array);
	}
	$lastItem = array_pop($array);
	$string = implode(", ", $array);
	return $string . ", and" . " " . $lastItem . '.';
}


echo "Some of the most famous theoretical physicists are {$famousFakePhysicists}" . PHP_EOL;

?>