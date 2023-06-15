<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$file = 'extras/users.txt';

if(file_exists($file)){
  // echo readfile($file);  //Read the content and number of bytes
  //fopen() - gives more control over the file
  $handle = fopen($file, 'r');

  $contents = fread($handle, filesize($file));
  fclose($handle);
  echo $contents;
} else {
  //Create the file
  $handle = fopen($file, 'w');
  $contents = 'RyanBanispal' . PHP_EOL . 'Pau' . PHP_EOL . 'Alden' . PHP_EOL . 'Catrice';
  fwrite($handle, $contents);
  fclose($handle);
}