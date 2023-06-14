<?php
echo '<h1>Array Functions</h1>';
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'banana', 'chico'];

//Get array length
// echo count($fruits);

//Search Array
// echo in_array('banana', $fruits);

//Add to an array
$fruits[] = 'dalandan';
array_push($fruits, 'mango', 'orange', 'peras', 'buko', 'pakwan', 'melon', 'langka');
array_unshift($fruits, 'pineapple');

// print_r($fruits); //printing the original list

//Remove from an array
array_pop($fruits); //removing from the last element
array_shift($fruits); //remove the first
// print_r($fruits); //after the remove

unset($fruits[3]);
// print_r($fruits); //after the remove

//split into chunks of 2
$chunkedArray = array_chunk($fruits,4);
// print_r($chunkedArray); 


//Concatenation of Arrays
$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = array_merge($arr1, $arr2);
// print_r($arr3);

//spread operator
$arr4 = [...$arr1, ...$arr2];
// print_r($arr4);

//Combine arrays (Keys & Values)
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);
// print_r($c);

//Array of keys
$keys = array_keys($c);
// print_r($keys);

//Flip keys and values
$flipped = array_flip($c);
// print_r($flipped);


//create an array of numbers with range()

$numbers = range (1,20);

//Map through array and create a new on
$newNumbers = array_map(function ($number) {
  return "Number {$number}";
}, $numbers);
print_r($newNumbers);

//What if you want to display <=10 : filter
$lessThan10 = array_filter($numbers, fn($number) => $number <=10);
print_r($lessThan10);

//What if we want to get the sum of 1 to 20:
  $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
    print_r($sum);

