<?php

// $numbers = [1, 2, 3, 4, 5];

// foreach($numbers as $key => $value) {
// 	echo("\$value has a key of {$key} and a value of {$value}\n");
// }

// $students = array(
//     array('name' => 'Virginia Potts', 'age' => 29),
//     array('name' => 'Elon Musk', 'age' => 42),
//     array('name' => 'Rasmus Lerdorf', 'age' => 45),
//     array('name' => 'Marissa Mayer', 'age' => 38)
// );

// foreach ($students as $student) {
//     foreach ($student as $key => $value) {
//         echo "Student's $key is $value\n";
//     }
// }



$books = array(
    'The Hobbit' => array(
        'publishing date' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'A Game of Thrones' => array(
        'publishing date' => 1996,
        'author' => 'George R. R. Martin',
        'number of pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'publishing date' => 1951,
        'author' => 'J. D. Salinger',
        'number of pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'publishing date' => 1859,
        'author' => 'Charles Dickens',
        'number of pages' => 544
    )
);

foreach($books as $title => $book) {
	foreach($book as $key => $value) {
		echo "$title's $key is $value\n";

	}
}

?>