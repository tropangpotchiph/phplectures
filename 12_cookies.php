<?php
echo '<h1>Cookies</h1>';
/* ------------- Cookies ------------ */

/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. 
  You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
*/

//Set a cookie
setcookie('name', 'Ryan', time() + 86400 * 30);
// echo time();

//Get a cookie and use it
if (isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

//Delete a cookie
setcookie('name', '', time() - 86400);