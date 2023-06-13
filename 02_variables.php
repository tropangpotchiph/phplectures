<?php
echo '<h1>Variables & Data Types</h1>';
/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers: 75
- Float - Decimal numbers: 3.1415
- Boolean - true or false: True / False
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($varname and $VARNAME are two different variables)
*/

$name = 'Ryan';   //String
$age = 40;  //Integer
$hasKids = true;   //Boolean
$cashOnHand = 1.50;    //Float

// var_dump($hasKids);

//Double quotes to add variables and strings
// echo "$name is $age years old";

//Old Jedi way
// echo "${name} is ${age} years old";

//alternative
// echo sprintf("%s is %d years old", $name, $age);

//Concatenate Strings
// echo '<h3>' . $name . ' is ' . $age . ' years old </h3>';

//Arithmetic operations
// echo 5 + 5;
// echo 10 - 6;
// echo 95 * 95;      //95 - 5 = 90 25
// echo 10 / 2;

// echo 5 + 5 . "<br>";
// echo 10 - 6 . "<br>";
// echo 95 * 95 . "<br>";      
// echo 10 / 2 . "<br>";

//Constants - cannot be changed
define('HOST', 'localhost');
define('USER', 'root');

//Create a program which will compute for the area and circumference of a circle

//declaration of PI
define('PI', 3.141592654);

//declare the radius of the circle
$radius = 8;

//Calculate the area and circumference
// $area = PI * $radius * $radius;
// $circumference = 2 * PI * $radius;

// Output the results
// echo 'Radius: ' . $radius . '<br>' ;
// echo 'Area: ' . $area . '<br>' ;
// echo 'Circumference: ' . $circumference . '<br>' ;

//Format the result with 2 decimal places
// $areaFormatted = number_format($area, 2);
// $circumferenceFormatted = number_format($circumference, 2);

// echo 'Area: ' . $areaFormatted . '<br>' ;
// echo 'Circumference: ' . $circumferenceFormatted . '<br>' ;

$areaFormatted = number_format(PI * $radius * $radius,2);
$circumferenceFormatted = number_format(2 * PI * $radius, 2);

echo 'Radius: ' . $radius . '<br>' ;
echo 'Area: ' . $areaFormatted . '<br>' ;
echo 'Circumference: ' . $circumferenceFormatted . '<br>' ;


?>

