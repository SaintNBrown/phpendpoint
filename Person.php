<?php 
//NOTE, WE CAN DECLARE A CLASS WITHOUT A VARIABLE
//creating classes in PHP
//by convention, name the class the same name as that of the class.
class Person{

  public $name;//how to declare a variable in php without assignment
  //private $name can only be visible to and modifiable to the members of the class
  //to modify a private variable, use the setter function  
  //protected $name is visible to it's class' and subclasses' members.

  //for static variables, use 'self::' to access.
  function get_name(){
    echo "Welcome, ".$this->name;
    //return $this->name; //refers to var $name.
    //note the format here
  }

  function set_name($new_name){
    $this->name = $new_name;
  }

}

$John = new Person();
$John->set_name("Anthony");
echo "<br>";
$John->get_name();
?>