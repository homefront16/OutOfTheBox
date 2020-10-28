<?php
require_once '../../header.php';
require_once '../../autoLoader.php';

$id = $_GET['id'];

$bs = new ProductBusinessService();

$product = $bs->findProductByID($id)


?>

<h1>Edit a Product</h1>

<div class="container">
<form action="../handlers/editProductHandler.php">
  
    <div class="form-group">
    <input type="hidden" class="form-control" id="ID" value="<?php echo $product->getId()?>" name="ID">
  </div>
  
  <div class="form-group">
    <label for="ProductName">Product Name</label>
    <input type="text" class="form-control" id="ProductName" value="<?php echo $product->getProductName()?>" name="ProductName">
  </div>
  
   <div class="form-group">
    <label for="Description">Description</label>
    <input type="text" class="form-control" id="Description" value="<?php echo $product->getDescription()?>" name="Description">
  </div>
  
   <div class="form-group">
    <label for="Price">Price</label>
    <input type="text" class="form-control" id="Price" value="<?php echo $product->getPrice()?>" name="Price">
  </div>
  
   <div class="form-group">
    <label for="imageURL">Image URL</label>
    <input type="text" class="form-control" id="imageURL" value="<?php echo $product->getImageURL()?>" name="imageURL">
  </div>


	<button type="submit" class="btn btn-success btn-lg">Make Changes</button>
  
</form>
</div>