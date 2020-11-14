<?php

require_once '../../autoLoader.php';

$c = new Cart(1);

$productBS = new ProductBusinessService();

$prod1 = $productBS->findProductByID(11);
$prod2 = $productBS->findProductByID(13);
$prod3 = $productBS->findProductByID(15);

/* echo "<pre>";
print_r($prod1);
echo "</pre>";

echo "<pre>";
print_r($prod2);
echo "</pre>";

echo "<pre>";
print_r($prod3);
echo "</pre>"; */

$c->addItem(11);

$c->addItem(15);
$c->addItem(15);

 echo "<pre>";
 print_r($c);
 echo "</pre>"; 

 
 $c->updateQuantity(13, 12);
 
 echo "<pre>";
 print_r($c);
 echo "</pre>"; 
 
 $c->updateQuantity(11, 0);
 
 echo "<pre>";
 print_r($c);
 echo "</pre>"; 
 
 $c->calcTotal();
 
 echo "<pre>";
 print_r($c);
 echo "</pre>"; 
?>