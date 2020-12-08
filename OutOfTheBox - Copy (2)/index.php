<?php 

require_once 'header.php';

?>


<html>
<head>
<meta charset="ISO-8859-1">
<title>Welcome to Out Of The Box</title>
</head>
<body>

<div class="container">
<div class="h-100 row align-items-center">
  <div class="col" style="background:#C0C0C0">

<h3>If you are a new user click <a href="presentation/views/registration.php">Here</a> to register</h3>
<form action="http://localhost/OutOfTheBox/presentation/handlers/loginHandler.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control form-control-lg" id="username" name="username">
    <small id="welcome" class="form-text text-muted">Welcome Back. We have some new items available.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control form-control-lg" id="password" name="password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>

</body>
</html>