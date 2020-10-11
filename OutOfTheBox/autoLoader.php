<?php

spl_autoload_register(function($class){
    
    // get the difference in folders between the location of autloader and the file that called autoloader
    $lastDirectories = substr(getcwd(), strlen(__DIR__));
    
    echo "getcwd = : " . getcwd() . "<br>";
    echo "__DIR__ = : " . __DIR__ . "<br>";
    echo "last directories = : " . $lastDirectories . "<br>";
    
    // count the number of slashes (folder depth)
    $numberOfLastDirectories = substr_count($lastDirectories, '\\');
    
    // This is the list of possible locations that are found in the app
    $directories = ['businessService', 'businessService\\Model', 'database', 'presentation', 'presentation\\handlers', 
        'presentation\\views', 'utility'];
    
    foreach($directories as $d){
        echo "looking in directory " . $d . "<br>";
        $currentDirectory = $d;
        for($x = 0; $x < $numberOfLastDirectories; $x++){
            $currentDirectory = "..\\" . $currentDirectory;
        }
        $classFile = $currentDirectory . '\\' . $class . '.php';
        
        echo "going to check if " . $classFile . " is readable<br>";
        if(is_readable($classFile)){
            if(require $d . '\\' . $class . ".php"){
                break;
            }
        }
        else{
            echo "I could not read this file " . $classFile . "<br>";
        }
    }
    
});
?>