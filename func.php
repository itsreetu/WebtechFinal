<?php
// 1. strlen()
$text = "Reetu";         // Returns the length of a string.
echo strlen($text);      // Output: 5

// 2. str_word_count()
$text = "Hello Ms Reetu";     // Counts the number of words in a string.
echo str_word_count($text);   // Output: 3

// 3. str_contains()
$text = "I love PHP";    // Checks whether a string contains another string.
var_dump(str_contains($text, "PHP"));  // Output: bool(true)

// 4. strpos()
$text = "Hello World";        // Finds the position of a substring inside a string.
echo strpos($text, "World");   // Output: 6

// 5. strtoupper()
$text = "hello";            // Converts a string to uppercase.
echo strtoupper($text);     // Output: HELLO

// 6. strtolower()
$text = "HELLO";            // Converts a string to lowercase.
echo strtolower($text);     // Output: hello

// 7. str_replace()
$text = "I like Java";     // Replaces a part of a string with another string.
echo str_replace("Java", "PHP", $text);
// Output: I like PHP

// 8. strrev()
$text = "Hello";        // Reverses a string.
echo strrev($text);     // Output: olleH

// 9. trim()
$text = "  Hello  ";    // Removes whitespace from the beginning and end of a string.
echo trim($text);       // Output: Hello


// 10. explode()
$text = "Apple,Banana,Mango";   // Converts a string into an array using a separator.
$fruits = explode(",", $text);

print_r($fruits);
// Output:
// Array ( [0] => Apple [1] => Banana [2] => Mango )

// 11. implode()
$fruits = ["Apple", "Banana", "Mango"];    // Converts array elements into a single string.
echo implode(", ", $fruits);
// Output: Apple, Banana, Mango

/ 12. substr()
$text = "Hello World";      // Returns a portion of a string.
echo substr($text, 0, 5);   // Output: Hello

// 13. is_int()
$x = 10;                // Checks whether a value is an integer.
var_dump(is_int($x));   // Output: bool(true)


// 14. is_float()
$x = 10.5;               // Checks whether a value is a floating-point number.
var_dump(is_float($x));  // Output: bool(true)

// 15. is_nan()
$x = acos(2);            // Checks whether a value is "Not a Number".
var_dump(is_nan($x));    // Output: bool(true)

// 16. is_numeric()
$x = "123";                // Checks whether a value is a number or numeric string
var_dump(is_numeric($x));  // Output: bool(true)

// 17. round()
$x = 4.6;                 // Rounds a decimal number to the nearest integer.
echo round($x);           // Output: 5

// 18. define()
define("PI", 3.1416);     // Creates a constant.
echo PI;                  // Output: 3.1416

// 19. date()
echo date("Y-m-d");      // Returns the current date/time in a specified format.
// Example Output: 2026-08-09

// 20. strtotime()
$time = strtotime("tomorrow");  // Converts a date/time string into a Unix timestamp.
echo date("Y-m-d", $time);      // Output: Tomorrow's date

// 21. time()
echo time();          // Returns the current Unix timestamp.
// Output: Current Unix timestamp

// 22. date_default_timezone_set()
date_default_timezone_set("Asia/Dhaka");  // Sets the default timezone.
echo date("H:i:s");
// Output: Current time in Bangladesh

// 23. date_default_timezone_get()
echo date_default_timezone_get();    // Returns the currently selected timezone.
// Output: Asia/Dhaka

// 24. include
include "header.php";   // Includes another PHP file in the current program.
// The contents of header.php will be included here.

// 25. require
// Includes another PHP file.
// If the file is missing, require causes a fatal error.
require "config.php";


// 26. json_encode()
$data = ["name" => "Reetu", "age" => 22];  // Converts a PHP array/object into a JSON string.
echo json_encode($data);
// Output: {"name":"Reetu","age":22}

// 27. json_decode()
$json = '{"name":"Reetu","age":22}';  // Converts a JSON string into a PHP object/array.
$data = json_decode($json);

echo $data->name;
// Output: Reetu

// 28. array()
$fruits = array("Apple", "Banana", "Mango");  // Creates an array.

print_r($fruits);
// Output:
// Array ( [0] => Apple [1] => Banana [2] => Mango )

// 29. array_keys()
$student = [
    "name" => "Reetu",
    "age" => 22
];

print_r(array_keys($student));
// Output:
// Array ( [0] => name [1] => age )


// 30. array_merge()
$a = ["Apple", "Banana"];  // Combines two or more arrays.
$b = ["Mango", "Orange"];

$result = array_merge($a, $b);

print_r($result);
// Output:
// Array ( [0] => Apple [1] => Banana
//         [2] => Mango [3] => Orange )


// 31. array_push()
$fruits = ["Apple", "Banana"];  // Adds one or more elements to the end of an array.
array_push($fruits, "Mango");

print_r($fruits);
// Output:
// Array ( [0] => Apple [1] => Banana [2] => Mango )

// 32. array_reverse()
$numbers = [1, 2, 3, 4];   // Reverses the order of an array.

print_r(array_reverse($numbers));
// Output:
// Array ( [0] => 4 [1] => 3 [2] => 2 [3] => 1 )

// 33. sizeof()
// Returns the number of elements in an array.
// sizeof() works the same as count().
$fruits = ["Apple", "Banana", "Mango"];

echo sizeof($fruits);           // Output: 3


// 34. count()
$numbers = [10, 20, 30, 40];  // Counts the number of elements in an array.
echo count($numbers);           // Output: 4

// 35. sort()
$numbers = [30, 10, 20];    // Sorts an array in ascending order.
sort($numbers);

print_r($numbers);
// Output:
// Array ( [0] => 10 [1] => 20 [2] => 30 )

?>