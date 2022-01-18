<?php 
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/PremiumUser.php";

$utente = new User('Giuseppe','Verdi');

$utente->setName('Peppe');


$utente->setEmail('peppeverdi@gmail.com');
var_dump($utente);
$prodotto = new Product('Iphone 13','AX520HHDD');
$prodotto->setPrice(999);
$prodotto->description = 'Smartphone';
var_dump($prodotto);

$utentePremium = new PremiumUser('Mario','Rossi','5SH886GQ');

$utentePremium->setEmail('mariorossi@gmail.com');

var_dump($utentePremium);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-2</title>
</head>
<body>
  <h1>Vetrina</h1>

  <h3>Prodotto:</h3>
  <h4><?php echo $prodotto->getProductName(); ?></h4>
  <h3>Prezzo normale:</h3>
  <h4><?php echo $prodotto->getPrice(); ?>€</h4>
  <h3>Prezzo utenti premium:</h3>
  <h4><?php echo ($prodotto->getPrice() - (($prodotto->getPrice() * $utentePremium->getDiscount())/100)) ?>€</h4>

</body>
</html>