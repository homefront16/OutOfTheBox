<?php
// Expects an array of $person. Displays the results in a table
// $persons = array
?>


<head>
<script
  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script>
  
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<style>
#users {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#users td, #users th {
    border: 1px solid #ddd;
    padding: 8px;
}

#users img{
width: 25%;
height: 25%

}

#users tr:nth-child(even){background-color: #f2f2f2;}

#users tr:hover {background-color: #ddd}

#users th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

</style>
</head>

<table id="users" class="display">

<thead>
<tr>
	<th>
    Edit
    </th>
    <th>
    Delete
    </th>
    <th>
    ID
    </th>
    
    <th>
    Product Name
    </th>
    
    <th>
    Description
    </th>
    
    <th>
    Price
    </th>
    <th>
    Photo
    </th>

</tr>
</thead>
<tbody>
<?php 

for($x= 0; $x < count($users); $x++)
{
    echo "<tr>";
    // example of the array
    // $users[0]['FirstName'] = "John"
    echo "<td><form action='../views/editProductForm.php'><input type='hidden' name='id' value=".$users[$x][0] ."><input type='submit' value='Edit'></form></td>";
    echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete this user?');\" href='deleteProductHandler.php?id=".$users[$x][0]."'>Delete</a></td>";
    echo "<td><a href='../views/showOneProduct.php?id=".$users[$x][0]. "'>".$users[$x][0]. "</a></td>";
    //echo "<td>" . $users[$x][0] . "</td>";
    echo "<td>" . $users[$x][1] . "</td>";
    echo "<td>" . $users[$x][2] . "</td>";
    echo "<td>" . $users[$x][3] . "</td>";
    echo "<td>" . '<img src="../../images/'.$users[$x][4].'"/>' . "</td>";
    //echo "<td>" . $users[$x][4] . "</td>";
   
    echo "</tr>";
}

?>

</table>
</tbody>

<script>
$(document).ready( function () {
    $('#users').DataTable();
} );
</script>