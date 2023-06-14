<?php
/* --- $_GET & $_POST Superglobals -- */
/*  
    We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
if (isset($_POST['submit'])){
    echo $_POST['username'] . "<br>";
    echo $_POST['age'] . "<br>";
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=Ryan&age=40">Link</a>

<!-- //Pass data through Form -->
<!-- //GET method is the efault -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<br>
<div>
    <label>Name: </label>
    <input type="text" name="username">    
</div>
<br>
<div>
    <label>Age:</label>
    <input type="text" name="age">
</div>

<br>
<input type="submit" name="submit" value="Submit">
</form>
