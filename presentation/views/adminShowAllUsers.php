<?php

require_once '../../autoLoader.php';
require_once '../../header.php';

$bs = new UserBusinessService();

$users = $bs->showAllUsers();

echo "<h1>All users </h1>";

require_once '../handlers/_displayAllUsers.php';

?>