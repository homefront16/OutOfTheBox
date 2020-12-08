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
	<form action="http://localhost/OutOfTheBox/presentation/handlers/addToCart.php">
	    <div class="card border-dark">
      <img src="../../images/<?php echo $product->getImageURL();?> " class="card-img-top" alt="card image cap">
      <div class="card-body">
        <h5 class="card-title"><?php echo $product->getProductName();?></h5>
        <p class="card-text"><?php echo $product->getDescription();?></p>
        <p class="card-text"><?php echo $product->getPrice();?></p>
        <button a type="submit" class="btn btn-primary">Add To Cart</button>
      </div>
    </div>
	</form>

</div>