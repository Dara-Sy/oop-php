<?php
    include 'parentclass.inc.php';


// create a new class and put props and methods inside it
class NewClass extends ParentClass{

  // properties and methods go here
  // create a public property called info
  public $info = "This is some info";

}

// instantiate a class
// create a var
$object = new NewClass;
var_dump($object);

// public can be accessed anywhere in the file (ie. index.html)

