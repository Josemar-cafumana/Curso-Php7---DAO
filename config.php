<?php

spl_autoload_register(function($nomeclasse){

    $filename ="class".DIRECTORY_SEPARATOR .$nomeclasse.".php";

    if(file_exists($filename)){

        require_once "$filename";

    }
    

})

?>