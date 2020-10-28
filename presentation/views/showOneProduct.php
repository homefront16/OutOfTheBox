<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../header.php';
require_once '../../autoLoader.php';

$id = $_GET['id'];

$bs = new ProductBusinessService();

$product = $bs->findProductByID($id)


?>

  <div class="d-flex justify-content-center col-sm-4">

    <div class="card border-dark">
      <img src="../../images/<?php echo $product->getImageURL();?> " class="card-img-top" alt="card image cap">
      <div class="card-body">
        <h5 class="card-title"><?php echo $product->getProductName();?></h5>
        <p class="card-text"><?php echo $product->getDescription();?></p>
        <p class="card-text"><?php echo $product->getPrice();?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
</div>