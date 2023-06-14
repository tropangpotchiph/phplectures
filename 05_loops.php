<?php
echo '<h1>Loops </h1>';
/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for ($x=0; $x <= 10; $x++) { 
//   echo "Number: $x <br>";
// }

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

// $x = 1;

// while ($x <= 10) {
//     echo "Number: $x <br>";
//     $x++;
// }


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

// $x = 1;

// do {
//       echo "Number: $x <br>";
//       $x++;
// } while ($x <= 10);

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

$numbers = [1,2,3,4,5];

foreach ($numbers as $x) {
  echo "Number: $x <br>";
}

//use the indexes with the loop

$posts = ['Post one', 'Post two', 'Post three'];

foreach ($posts as $index => $post) {
  echo $index . " - " . $post . "<br>";
}

$person = [
  'first_name' => 'Ryan',
  'last_name' => 'Azur',
  'email' => 'razur@gmail.com',
];

//Get Keys
foreach ($person as $key => $val) {
  echo $key . ' - ' . $val . "<br>";
}