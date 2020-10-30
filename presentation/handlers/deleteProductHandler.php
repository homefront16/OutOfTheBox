<?php
require_once '../../header.php';
require_once '../../autoLoader.php';

$id = $_GET['id'];

$bs = new ProductBusinessService();

$success = $bs->deleteProductByID($id);

if($success){
    ?>
    <div class="alert alert-success" role="alert">
  	Product Succesfully Deleted!
	</div>
    <?php 
    
}
else{
    echo "Nothing was deleted";
}
?>