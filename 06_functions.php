<?php
echo '<h1>Functions</h1>';
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/
###############################################
// $y = 12;

// function registerUser()
// {
//   // $x = 10;
//   global $y;
//   echo $y . "<br>";
//   echo 'User has been registered!';
// }


// //Running a function
// registerUser();
// echo $x;   //This will result to an error because x is in function scope
###############################################

function registerUser()
{

  echo 'User has been registered!' . "<br>";
}

//Running a function
// registerUser();
###############################################

//Adding params

function registerUser2($username)  //parameter
{

  echo "User {$username} has been registered!";
}

//Passing in an argument
// registerUser2('Joseph');

//Returning values 
//function which will get the sum of 2 numbers

function add($num1, $num2) 
{
  return $num1 + $num2;
}

// $sum = add(5,5);
// echo $sum;

//Adding default values

function subtract($num1=10, $num2 = 5) 
{
  return $num1 - $num2;
}

// echo subtract();


//Assigning Anonymous function to variables
$add = function ($num1, $num2) {
  return $num1 + $num2;
};

// echo $add(5,5);

//Arrow Function

$multiply =fn($num1, $num2) => $num1 * $num2;

echo $multiply(97,97);