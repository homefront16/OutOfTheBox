<?php
// This file is a work in progress. Result print but not in the 3 card row as intended. 
// Expects an array of $person. Displays the results in a table
// $persons = array
?>

<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


<div class="container">
<div class="row">
<?php 
for($x= 0; $x < count($users); $x++)
{
?>


  <div class="col-sm-4">

    <div class="card border-dark">
      <img src="../../images/<?php echo $users[$x][4]?> " class="card-img-top" alt="card image cap">
      <div class="card-body">
        <h5 class="card-title"><?php echo $users[$x][1]?></h5>
        <p class="card-text"><?php echo $users[$x][2]?></p>
        <p class="card-text"><?php echo $users[$x][3]?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
</div>
</div>
</div>
<?php 
 
}

?>