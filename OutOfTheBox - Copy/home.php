<?php 

require_once 'header.php';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
    header("Location:http://localhost/OutOfTheBox/index.php");
}
?>



<div class="container">
<div class="h-100 row align-items-center">
<div class="col" style="background:#C0C0C0">

<h1>People Search</h1>
<form action = "presentation/handlers/PersonSearchHandler.php">

Search for a person:<input type="text" name="name"></input><br>
<input type="submit" value="search"></input>
</form>

<h1>Product Search</h1>
<form action = "presentation/handlers/ProductSearchHandler.php">

Search for a product:<input type="text" name="name"></input><br>
<input type="submit" value="search"></input>
</form> 

</div>
</div>
</div>