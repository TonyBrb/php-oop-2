<?php 
require_once __DIR__ . "/User.php";

class PremiumUser extends User{
  private $premiumCode;
  private $discount = 20;

  function __construct($_name, $_lastname,$_premiumCode)
  {
    parent::__construct($_name, $_lastname);
    $this->premiumCode = $_premiumCode;
  }

  public function setDiscount($_discount)
  {
    $this->discount = $_discount;
  }

  public function getDiscount(){
    return $this->discount;
  }

}
?>