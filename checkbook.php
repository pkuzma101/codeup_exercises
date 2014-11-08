<?php

$filename = 'checkbook.txt';

$balance = 5000;

function getInput($upper = false) {
	// trim whitespace from what user types in
	$input = trim(fgets(STDIN));
		if($upper == true) {
			// turns any user input to uppercase
			$input = strtoupper($input);
		}
		return $input;
}

function withdrawal($balance) {
	$expense = trim(fgets(STDIN));
			// Checks to see if user entered a number
			if(is_numeric($expense)) {
				// Subtracts user input from $balance
				$newBalance = $balance - $expense;
				// echo "Your new bank balance is now: " . $newBalance . PHP_EOL;
					// Returns user's new balance
					return $newBalance;
			}
			else {
				echo "Please enter a valid number.";
			}
}

function deposit($balance) {
	$infusion = trim(fgets(STDIN));
		//Checks to see if user entered a number
		if(is_numeric($infusion)) {
			// Adds user input to $balance
			$newBalance = $balance + $infusion;
			// echo "Your new bank balance is now: " . $newBalance . PHP_EOL;
				// Returns new balance
				return $newBalance;
		}
		else {
			echo "Please enter a valid number.";
		}
}

function saveFile($balance, $filename) {
	$handle = fopen($filename, 'w');
		fwrite($handle, $balance);
		fclose($handle);
}

function openFile($filename) {
	$handle = fopen($filename, 'r');
		$contents = fread($handle, filesize($filename));
		fclose($handle);
		return $contents;
}

do {
	// display user's current balance and options
	echo "Your current balance is " . $balance . "." . PHP_EOL;
	echo "To make a withdrawal, press (W)." . PHP_EOL;
	echo "To make a deposit, press (D)." . PHP_EOL;
	echo "To save your bank (A)ccount, press (A)." . PHP_EOL;
	echo "To quit, press (Q)." . PHP_EOL;
	// takes and reads user inout
	$input = getInput(true);

	switch($input) {
		case "W":
			echo "Pick a category for this expense:" . PHP_EOL;
			echo "(R)ent, (U)tilities, Debt (P)ayment, (S)hopping" . PHP_EOL;
			$withdrawalChoice = getInput(true);
				if($withdrawalChoice == "R") {
					echo "How much did you pay in rent?" . PHP_EOL;
						$balance = withdrawal($balance);
				}
				elseif($withdrawalChoice == "U") {
					echo "How much was this utility bill?" . PHP_EOL;
						$balance = withdrawal($balance);
				}
				elseif($withdrawalChoice == "P") {
					echo "What was the amount you paid?" . PHP_EOL;
						$balance = withdrawal($balance);
				}
				elseif($withdrawalChoice == "S") {
					echo "How much did you spend?" . PHP_EOL;
						$balance = withdrawal($balance);
				}
				else {
					echo "Please pick one of the options.";
				}
		break;

		case "D":
			echo "How much money are you depositing?" . PHP_EOL;
				$balance = deposit($balance);
		break;

		case "A":
			saveFile($balance, $filename);
			echo "Bank account saved.";
		break;
	}
}while($input != "Q");
	exit(0);
	
?>