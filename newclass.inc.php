<?php
    // include 'parentclass.inc.php';


// create a new class and put props and methods inside it
class NewClass extends ParentClass {

  // properties and methods go here
  // create a public property called info
  public $info = "This is some info";

  public function name() {
    return $this->name;
  }

}

// instantiate a class
// create a var
$object = new NewClass;
var_dump($object);

// public can be accessed anywhere in the file (ie. index.html)
// protected means we can access to the classes we extend to
// private means only the class which it's set to and use that private info
