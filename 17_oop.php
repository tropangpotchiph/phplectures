<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
  // Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes
protected $name;
protected $email;
protected $password;
protected $title;


// The constructor is called whenever an object is created from the class.
// We pass in properties to the constructor from the outside.
// We assign the properties passed in from the outside to the properties we created inside the class.

public function __construct($name, $email, $password) {
$this->name = $name;
$this->email = $email;
$this->password = $password;

}

// Methods are functions that belong to a class.
// function setpassword($name) {
//   $this -> name = $name;
// }

public function getName() {
  return $this->name;
}

public function getEmail() {
  return $this->email;
}

}

//Instantiate a user
$user1 = new User('Ryan', 'ryan@gmail.com', 'qwerty123');
$user2 = new User('Alden', 'alden@gmail.com', 'P@55W0rd!');


// $user1 -> setName('Ryan');
// $user2 -> setName('Alden');

// var_dump($user1);
// var_dump($user2);

// echo $user1 -> getEmail() . "<br>";
// echo $user2 -> getName();


/* ----------- Inheritence ---------- */

/*
  Inheritence is the ability to create a new class from an existing class.
  It is achieved by creating a new class that extends an existing class.
*/


class Employee extends User {
  public function __construct($name, $email, $password, $title) {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function getTitle() {
    return $this->title;
  }
}

$employee1 = new Employee('Catrice', 'catrice@gmail.com', '123456', 'Manager');
echo $employee1->getTitle();





// Destructor is called when an object is destroyed or the end of the script.

