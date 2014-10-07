<?php
// $numbers = [1, 2, 3, 4, 5];

// for($i =0; $i < count($numbers); $i++) {
// 	echo ("\$numbers has an element with a value of {$numbers[$i]}\n");
// }

// foreach($numbers as $number) {
// 	echo ("\$numbers has an element with a value of {$number}\n");

// }

// $names = ['Sabin', 'Edgar', 'Setzer', 'Locke', 'Cyan', 'Shadow'];

// foreach($names as $name) {
// 	echo "Hello {$name}\n";
// }


$things = ['Sgt. Pepper', "11", null, array(1, 2, 3), 3.14, "12 + 7", false, (string) 11];
	foreach($things as $datum) {
		if(is_array($datum)) {
			 // foreach($datum as $array) {
				echo "{$datum}\n";
			 // }
		}
		elseif(is_integer($datum)) {
			echo "{$datum}\n";
		}
		elseif(is_bool($datum)) {
			echo "{$datum}\n";
		}
		elseif(is_float($datum)) {
			echo "{$datum}\n";
		}
		elseif(is_null($datum)) {
			echo "{$datum}\n";
		}
		elseif(is_string($datum)) {
			echo "{$datum}\n";
		}
	}

	// foreach($things as $datum) {
	// 	if(is_scalar($datum)) {
	// 		echo "$datum\n";
	// 	}
	// }



?>