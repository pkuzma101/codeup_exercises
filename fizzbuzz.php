<?php
for($a = 1; $a <= 100; $a++) {
	if($a % 3 == 0 && $a % 5 == 0) {
		echo "FizzBuzz\n";
	}
	elseif($a % 5 == 0) {
		echo "Buzz\n";
	}
	elseif($a % 3 == 0) {
		echo "Fizz\n";
	}
	else {
		echo "$a\n";
	}
}
?>
