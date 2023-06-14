<?php
echo '<h1>Conditionals & Operators</h1>';
/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

// $age = 10;

// if ($age >= 18) {
//   echo 'You are old enough to vote';
// } else {
//   echo 'Sorry, you are too young to vote.';
// }

date_default_timezone_set('Asia/Manila');
// $today = date('F j, Y, g:i a');
// echo $today . '<br>';


//whatif more than one condition?
// $t = date('H');

// if ($t<12) {
//   echo 'Good morning!';
// } elseif ($t <17) {
//   echo 'Good afternoon!';
// } else {
//   echo 'Good evening!';
// }


//Check if an array is empty
// // $posts = [null];
// $posts = ['First Post'];

// if there is a post -> first post; if there is no post -> no posts
//problem in handling null values in $posts
// if ($posts===[]) {
// echo 'There is no posts';
// } else {
//   echo $posts[0];
// }

// can handle null and empty posts
// if (!empty($posts[0])) {
//   echo $posts[0];
// } else {
//   echo 'There are no posts';
// }

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// $posts = [];
$posts = ['First Post'];

// echo !empty($posts[0]) ? $posts[0] : 'There are no posts';

// $firstPost = !empty($posts[0]) ? $posts[0] : null;
// echo $firstPost;

//null coalescing operator
$firstPost = $posts[0] ?? null;
// echo $firstPost;


/* -------- Switch Statements ------- */

$favcolor = 'purple';

switch ($favcolor) {
  case 'red':
    echo 'Your favorite color is red!';
    break;
  case 'green':
    echo 'Your favorite color is green!';
    break;
  case 'blue':
    echo 'Your favorite color is blue!';
    break;
  default:
  echo 'Your favorite color is not red, green or blue';
}