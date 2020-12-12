<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../autoLoader.php';
//require_once '../../header.php';
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
    Order ID
    </th>
    
    <th>
    Date
    </th>
    
    <th>
    First Name
    </th>
    
    <th>
    Last Name
    </th>
       <th>
    Street
    </th>
       <th>
    City
    </th>
       <th>
    State
    </th>


</tr>
</thead>

<tbody>
<?php 


for($x= 0; $x < count($orders); $x++)
{
    echo "<tr>";
    echo "<td>" . $orders[$x][0] . "</td>";
    echo "<td>" . $orders[$x][1] . "</td>";
    echo "<td>" . $orders[$x][2] . "</td>";
    echo "<td>" . $orders[$x][3] . "</td>";
    echo "<td>" . $orders[$x][4] . "</td>";
    echo "<td>" . $orders[$x][5] . "</td>";
    echo "<td>" . $orders[$x][6] . "</td>";
    
    echo "</tr>";
}

?>
</tbody>
</table>
<script>
$(document).ready( function () {
    $('#users').DataTable();
} );
</script>

