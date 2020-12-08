<?php
require_once '../../header.php';
require_once '../../autoLoader.php';

$id = $_GET['id'];

$bs = new UserBusinessService();

$user = $bs->findByID($id);


?>

<h1>Edit a user account</h1>

<div class="container">
<form action="../handlers/editUserHandler.php">
  
    <div class="form-group">
    <input type="hidden" class="form-control" id="ID" value="<?php echo $user->getId()?>" name="id">
  </div>
  
  <div class="form-group">
    <label for="FirstName">First Name</label>
    <input type="text" class="form-control" id="firstName" value="<?php echo $user->getFirstName()?>" name="FirstName">
  </div>
  
   <div class="form-group">
    <label for="LastName">Last Name</label>
    <input type="text" class="form-control" id="LastName" value="<?php echo $user->getLastName()?>" name="LastName">
  </div>
  
   <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" value="<?php echo $user->getUsername()?>" name="username">
  </div>
  
   <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" value="<?php echo $user->getPassword()?>" name="password">
  </div>

    <div class="form-group">
    <label for="Role">Role</label>
    <select class="form-control" id="Role" name="Role">
      <option <?php if($user->getRole() == 1) {echo "selected ='selected'";}?>>1</option>
      <option <?php if($user->getRole() == 2) {echo "selected ='selected'";}?>>2</option>
      <option <?php if($user->getRole() == 3) {echo "selected ='selected'";}?>>3</option>
      <option <?php if($user->getRole() == 4) {echo "selected ='selected'";}?>>4</option>
    </select>
  </div>
  
    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" value="<?php echo $user->getEmail()?>" name="email">
  </div>

	<button type="submit" class="btn btn-success btn-lg">Make Changes</button>
  
</form>
</div>