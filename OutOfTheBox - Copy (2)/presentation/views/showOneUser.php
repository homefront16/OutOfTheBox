<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../header.php';
require_once '../../autoLoader.php';

$id = $_GET['id'];

$bs = new UserBusinessService();


$user = $bs->findByID($id);


?>

  <div class="d-flex justify-content-center col-sm-4">

    <div class="card border-dark">
      <div class="card-body">
        <h5 class="card-title"><?php echo $user->getFirstName() . " " . $user->getLastName();?></h5>
        <p class="card-text"><?php echo $user->getUsername();?></p>
        <p class="card-text"><?php echo $user->getPassword();?></p>
        <p class="card-text"><?php echo $user->getEmail();?></p>
        <p class="card-text"><?php echo $user->getRole();?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
</div>