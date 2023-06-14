<?php
/* --- Sanitizing Inputs -- */
/*  
    Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/
if (isset($_POST['submit'])){
    // echo $_POST['username'] . "<br>";
    // echo $_POST['age'] . "<br>";

    //htmlspecialchars() - converts special characters to HTML entities
    // $username = htmlspecialchars($_POST['username']);
    // $age = htmlspecialchars($_POST['age']);

    // filter_input() - sanitize inputs
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);

    echo "Name: " . $username . "<br>";
    echo "Age: " . $age . "<br>";
}

?>
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

<!-- <script>alert(1)</script> -->