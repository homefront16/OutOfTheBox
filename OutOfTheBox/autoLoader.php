<?php

spl_autoload_register(function($class){
    
    // get the difference in folders between the location of autloader and the file that called autoloader
    $lastDirectories = substr(getcwd(), strlen(__DIR__));

    
    // count the number of slashes (folder depth)
    $numberOfLastDirectories = substr_count($lastDirectories, '\\');
    
    // This is the list of possible locations that are found in the app
    $directories = ['businessService', 'businessService\\Model', 'database', 'presentation', 'presentation\\handlers', 
        'presentation\\views', 'utility'];
    
    foreach($directories as $d){
        $currentDirectory = $d;
        for($x = 0; $x < $numberOfLastDirectories; $x++){
            $currentDirectory = "..\\" . $currentDirectory;
        }
        $classFile = $currentDirectory . '\\' . $class . '.php';
        
        if(is_readable($classFile)){
            if(require $d . '\\' . $class . ".php"){
                
               break;
            }
           
        }

    }
    
});
?>