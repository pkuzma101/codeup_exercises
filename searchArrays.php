<?php


 // first names
 $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

 $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


 $query = "Dana";

 $result = array_search($query, $names);

 if($result == true) {
 	echo "TRUE" . PHP_EOL;
 }
 	else {
 		echo "FALSE" . PHP_EOL;
 	}
// Find values in common between arrays

 function compareArrays($names, $compare) {
 	$difference = array_intersect($names, $compare);
 		print_r($difference);
 }

 compareArrays($names, $compare);


?>