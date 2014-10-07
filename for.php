<?php

fwrite(STDOUT, "Give me a minimum number. ");
	$number1 = trim(fgets(STDIN));

fwrite(STDOUT, "Give me a maximum number. ");
	$number2 = trim(fgets(STDIN));

fwrite(STDOUT, "Count up by which number?");
	$number3 = trim(fgets(STDIN));
if(is_numeric($number3)) {
	$count = $number3;
}
else {
	$count = 1;
}
if(is_numeric($number1) && (is_numeric($number2))) {
	$min = $number1;
	$max = $number2;		
}	
	
else {
	$min = $argv[2];
	$max = $argv[1];
}

for($a = $min; $a <= $max; $a += $number3) {
	echo "$a\n";
			}

	



	

// for($a = 1; $a <= 100; $a++) {
// 	if($a % 3 == 0 && $a % 5 == 0) {
// 		echo "FizzBuzz\n";
// 	}
// 	elseif($a % 5 == 0) {
// 		echo "Buzz\n";
// 	}
// 	elseif($a % 3 == 0) {
// 		echo "Fizz\n";
// 	}
// 	else {
// 		echo "$a\n";
// 	}
// }