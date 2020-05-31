<?php

spl_autoload_register(function (string $classFullName) {
    $classFilePath = str_replace('\\', DIRECTORY_SEPARATOR, $classFullName);
    $classFilePath .= '.php';
    
    if (file_exists($classFilePath)) {
        require_once $classFilePath;
    }    
});

function init() {
    session_start();
    require_once 'config.inc';   
    if (!(isset($_SESSION['user']))){
        header("Location: ".ABSOLUTEURL."system/login.php");
    }
}

?>