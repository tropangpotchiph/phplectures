<?php

/* ----------- Exceptions ----------- */

/*
  PHP has an exception model similar to that of other programming languages. An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.
*/

function inverse($x) {
  if (!$x) {
    throw new Exception('Division by zero!');
  }

  return 1 / $x;
}


//Handle Exception

/* try {
  echo inverse(0) . '<br>';
  echo inverse(5) . '<br>';
  echo inverse(10) . '<br>';
  
} catch (Exception $e) {
  echo 'Caught exception:', $e->getMessage(), '<br>';
}

echo 'Hello World'; */

//With Finally
try {
  echo inverse(20) . '<br>';
  echo inverse(0) . '<br>';
  echo inverse(10) . '<br>';
  
} catch (Exception $e) {
  echo 'Caught exception:', $e->getMessage(), '<br>';
} finally {
  echo 'Finally Kainan NA!' . '<br>';

}


try {
  echo inverse(0) . '<br>';
  echo inverse(5) . '<br>';
  echo inverse(10) . '<br>';
  
} catch (Exception $e) {
  echo 'Caught exception:', $e->getMessage(), '<br>';
} finally {
  echo 'Sana May Dessert' . '<br>';

}

echo 'Hello World';

