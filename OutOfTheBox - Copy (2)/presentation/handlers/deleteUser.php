<?php
require_once '../../header.php';
require_once '../../autoLoader.php';

$id = $_GET['id'];

$bs = new UserBusinessService();

$success = $bs->deleteItemByID($id);

if($success){
    ?>
    <div class="alert alert-success" role="alert">
  	User Succesfully Deleted!
	</div>
    <?php 
    
}
else{
    echo "Nothing was deleted";
}
?>