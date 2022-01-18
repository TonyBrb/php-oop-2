<?php 
class User{
  private $name;
  private $lastname;
  private $email;


  function __construct($_name, $_lastname)
  {
    $this->name = $_name;
    $this->lastname = $_lastname;
  }

  //SETTER
  public function setName($_name){
    $this->name = $_name;
  }

  public function setLastname($_lastname){
    $this->lastname = $_lastname;
  }

  public function setEmail($_email){
    $this->email = $_email;
  }

  //GETTER

  public function getName(){
    return $this->name;
  }

  public function getLastname()
  {
    return $this->lastname;
  }

  public function getEmail()
  {
    return $this->email;
  }

}
?>