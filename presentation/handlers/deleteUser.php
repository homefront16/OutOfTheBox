<?php
require_once '../../header.php';
require_once '../../autoLoader.php';

$id = $_GET['id'];

$bs = new UserBusinessService();

$success = $bs->deleteItemByID($id);

if($success){
    echo "Item was deleted<br>";
    
}
else{
    echo "Nothing was deleted";
}
?>