<?php


 // first names
 $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

 $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


 $query = "Dana";

 function nameFound($name, $array) {
 	if(in_array($name, $array)) {
 		return true;
 	}
 	else {
 		return false;
 	}
 }

 $result = array_search($query, $names);

 if($result == true) {
 	echo "TRUE" . PHP_EOL;
 }
 	else {
 		echo "FALSE" . PHP_EOL;
 	}
// Find values in common between arrays

 // function compareArrays($names, $compare) {
 // 	$difference = array_intersect($names, $compare);
 // 		print_r($difference);
 // }

 function compareArrayValues($names, $compare) {
 	$count = 0;
 	foreach($names as $name) {
 		if(nameFound($name, $names) && nameFound($name, $compare)) {
 			$count++;
 		}
 	}
 	return $count;
 }

 echo "The two arrays have " . compareArrayValues($names, $compare) . " values in common" . PHP_EOL;

 // compareArrays($names, $compare);

 compareArrayValues($names, $compare);


?>