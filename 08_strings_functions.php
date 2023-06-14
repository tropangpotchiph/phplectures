<?php
/* ---------- String Functions -------- */
/*  
    Functions to work with strings  
    https://www.php.net/manual/en/ref.strings.php
*/

$string = 'Hello World';
echo 'string = \'Hello World\'<br><br>';

// Get the length of a string
echo "Get the length of a string<br>";
echo strlen($string) . "<br><br>";

// Find the position of the first occurrence of a substring in a string
echo "Find the position of the first occurrence of a substring in a string <br>";
echo strpos($string, 'o') . "<br><br>";

// Find the position of the last occurrence of a substring in a string
echo "Find the position of the last occurrence of a substring in a string <br>";
echo strrpos($string, 'o') . "<br><br>" ;

// Reverse a string
echo "Reverse a string <br>";
echo strrev($string) . "<br><br>";

// Convert all characters to lowercase
echo "Convert all characters to lowercase <br>";
echo strtolower($string) . "<br><br>";

// Convert all characters to uppercase
echo "Convert all characters to uppercase <br>";
echo strtoupper($string) . "<br><br>";

// Uppercase the first character of each word
echo "Uppercase the first character of each word <br>";
echo ucwords($string) . "<br><br>";

// String replace
echo "String replace <br>";
echo str_replace('World', 'Everyone', $string) . "<br><br>";

// Return portion of a string specified by the offset and length
echo "Return portion of a string specified by the offset and length <br>";
echo substr($string, 0, 5) . "<br>";
echo substr($string, 5) . "<br>";

// Starts with
echo "Starts with <br>";
if (str_starts_with($string, 'Hello')) { 
     echo 'YES' . "<br><br>" ;
}

// Ends with
echo "Ends with <br>";
if (str_ends_with($string, 'ld')) {  
    echo 'YES' . "<br><br>";
}

echo " <br>";

//HTML Entities - This is good for security
$string2 = '<h1>Hello World</h1>';  //opens up our website to attack

$string3 = '<script> alert(1)</script>'; 
// echo $string3;
echo htmlentities($string3). "<br>";
// echo htmlspecialchars($string3);

