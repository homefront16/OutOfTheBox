<?php

require_once '../../autoLoader.php';

class UserBusinessService
{
    function showAllUsers(){
        $service = new UserDataService();
        return $service->showAllUsers();
    }
    function searchByFirstName($name){
        $service = new UserDataService();
        return $service->findByFirstName($name);
    }
    
    function searchByLastName($name){
        $service = new UserDataService();
        return $service->findByLastName($name);
    }
    
    function searchByFirstAndLastName($firstName, $lastName){
        $service = new UserDataService();
        return $service->findByFirstAndLastName($firstName, $lastName);
    }
    
    function findByFirstNameAndAddress($name){
        $service = new UserDataService();
        return $service->findByFirstNameWithAddress($name);
    }
    
    function findByID($id){
        $service = new UserDataService();
        return $service->findByID($id);
    }
    
    function deleteItemByID($id){
        $service = new UserDataService();
        return $service->deleteItemByID($id);
    }
    
    function updateOne($id, $person){
        $service = new UserDataService();
        return $service->updateOne($id, $person);
    }
    
    function makeNew($person){
        $service = new UserDataService();
        return $service->makeNew($person);
    }
    
    function wildCardSearchBefore($name){
        $service = new UserDataService();
        return $service->wildCardSearchBefore($name);
    }
    
    function wildCardSearchAfter($name){
        $service = new UserDataService();
        return $service->wildCardSearchAfter($name);
    }
    
    function userAuthenticate($username, $password){
        $service = new UserDataService();
        return $service->userAuthenticate($username, $password);
    }
    
    function findUserID($username, $password){
        $service = new UserDataService();
        return $service->findUserID($username, $password);
    }
}

?>

