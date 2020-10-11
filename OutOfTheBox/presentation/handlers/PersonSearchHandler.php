<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../autoLoader.php';

// get the search term from the input form
$searchPhrase = $_GET['name'];

// create an instance of the business service
$bs = new UserBusinessService();

// find method returns an array of person
$users = $bs->findByFirstNameAndAddress($searchPhrase);


?>
<h2>Search Results</h2>
<p>Here is what we found</p>

<?php 
if($users){
    // We have results

    include('_displayPeopleSearchResults.php');
}
else {
    echo "None found here like that <br>";
}

?>