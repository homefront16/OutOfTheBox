<?php
require_once '../../header.php';
require_once '../../autoLoader.php';

?>

<h1>Create a Product</h1>

<div class="container">
<form action="../handlers/newProductHandler.php">
  
  <div class="form-group">
    <label for="ProductName">Product Name</label>
    <input type="text" class="form-control" id="ProductName" name="ProductName">
  </div>
  
   <div class="form-group">
    <label for="Description">Description</label>
    <input type="text" class="form-control" id="Description" name="Description">
  </div>
  
   <div class="form-group">
    <label for="Price">Price</label>
    <input type="text" class="form-control" id="Price" name="Price">
  </div>
  
   <div class="form-group">
    <label for="imageURL">Image URL</label>
    <input type="text" class="form-control" id="imageURL" name="imageURL">
  </div>


	<button type="submit" class="btn btn-success btn-lg">Add New Product</button>
  
</form>
</div>