<?php
echo '<h1>Arrays</h1>';
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

//Simple array of numbers
$numbers = [1,2,3,4,5];

//Simple array of strings
$colors = ['red', 'blue', 'green'];

//Using the array function to create an array of fruits
$fruits = array('apple', 'banana', 'chico');

//Outputting value from an array
// echo $numbers[0]. "<br>";
// echo $numbers[3] + $numbers[4]. "<br>";
// echo $numbers[0] + $fruits[0]; //will produce an error
// echo $numbers[0] . " " . $fruits[0] . "<br>";
// var_dump($numbers);
// print_r($numbers);

/* ------ Associative Arrays ----- */

/*
  Associative arrays allow us to use named keys to identify values.
*/
$colors = [
  1 => 'red',
  2 => 'green',
  3 => 'blue',
];

// echo $colors[1];

$hex = [
  'red' => '#f00',
  'green' => '#0f0',
  'blue' => '#00f',
];

// echo $hex['red'] . "<br>";
// var_dump($hex);

//Single Person
// $person = [
//   'first_name' => 'Ryan',
//   'last_name' => 'Azur',
//   'email' => 'razur@gmail.com',
// ];

// echo $person['first_name'] . "<br>";
// echo $person['last_name']  . "<br>";

/* ---- Multi-dimensional arrays ---- */

/*
  Multi-dimansional arrays are often used to store data in a table format.
*/

$people = [
  [
  'first_name' => 'Ryan',
  'last_name' => 'Azur',
  'email' => 'razur@gmail.com',
  ],
  [
  'first_name' => 'Benjie',
  'last_name' => 'Cruz',
  'email' => 'bcruz@gmail.com',
  ],
  [
  'first_name' => 'Giselle',
  'last_name' => 'Sison',
  'email' => 'gsison@gmail.com',
  ],
];

// var_dump($people);
// print_r($people);

//Accessing values in a multi dimensional array
// echo $people[0]['first_name'] . "<br>";
// echo $people[2]['email']. "<br>";
// echo $people[2]; //This is an error
// print_r ($people[2]);
// echo implode('<br>',$people[2]);

//Encode to JSON
// var_dump(json_encode($people));
// print_r(json_encode($people));

// Decode to JSON

// $jsonobj = '{
//   "first_name" : "Ryan",
//   "last_name" : "Azur",
//   "email" : "razur@gmail.com"
// }';
// var_dump(json_decode($jsonobj));
// print_r(json_decode($jsonobj));

?>