<?php // This is a php tag. If there is no html or other content below the php, we don't need to close the php tag.

/* ------- Outputting Content ------- */

// Echo - Output strings, numbers, html, etc

// echo '<h1>Hello World</h1>';
// echo 'Welcome to the land of PHP - Philippines <br>';
// echo 123 . "<br>";
// echo 'Land of the free<br>';


// print - Similar to echo, but a bit slower
// print 'Hello'

// print_r - Gives a bit more info. Can be used to print arrays
// print_r('Hello')
// print_r([1,2,3]);

// var_dump - Even more info like data type and length
// var_dump('Hello');
// var_dump([1,2,3]);


/* ------------ Comments ------------ */

// This is a single line comment

/*
      * This is a multi-line comment
      *
      * It can be used to comment out a block of code
*/

// If there is more content after the PHP, such as this file, you do need the ending tag. Otherwise you do not.
?>

<!-- You can output any HTML that you want within a .php file -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My PHP Website</title>
</head>
<body>
<h1>Hello <?php echo 'Ryan123';?></h1>
    <h1>Hello <?php echo 'Testing1234567';?></h1>
</body>
</html>