<?php 
class Product{
  private $name;
  private $code;
  private $price;
  public $description;


  function __construct($_name,$_code)
  {
    $this->name = $_name;
    $this->code = $_code;
  }

  public function setProductName($_name){
    $this->name = $_name;
  }

  public function setProductCode($_code)
  {
    $this->code = $_code;
  }

  public function setPrice($_price)
  {
    $this->price = $_price;
  }

  public function getProductName(){
    return $this->name;
  }

  public function getProductCode(){
    return $this->code;
  }

  public function getPrice(){
    return $this->price;
  }


}
?>