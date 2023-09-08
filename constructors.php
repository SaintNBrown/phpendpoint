<?php 
class human{

  var $fname;
  var $lname;
  public function __construct($fname, $lname){
    $this -> fname = $fname;
    $this -> lname = $lname;

  }

  function showname(){
    echo $this->fname." ".$this->lname;
  }
}

$newPerson = new human("Anthony", "Jason");
$newPerson->showname();
?>