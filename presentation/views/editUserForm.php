<?php
require_once '../../header.php';
?>

<h1>Edit a user account</h1>

<div class="container">
<form action="../handlers/editUserHandler.php">

  <div class="form-group">
    <label for="ID">Enter the ID number that you would like to edit</label>
    <input type="number" class="form-control" id="ID" placeholder="ID Number" name="ID">
  </div>
  
  <div class="form-group">
    <label for="FirstName">First Name</label>
    <input type="text" class="form-control" id="firstName" placeholder="First Name" name="FirstName">
  </div>
  
   <div class="form-group">
    <label for="LastName">Last Name</label>
    <input type="text" class="form-control" id="LastName" placeholder="Last Name" name="LastName">
  </div>
  
   <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" placeholder="Username" name="username">
  </div>
  
   <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
  </div>

    <div class="form-group">
    <label for="Role">Role</label>
    <select class="form-control" id="Role" name="Role">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select>
  </div>
  
    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
  </div>

	<button type="submit" class="btn btn-success btn-lg">Make Changes</button>
  
</form>
</div>