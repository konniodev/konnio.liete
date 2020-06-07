<?php

spl_autoload_register(function (string $classFullName) {
    $classFilePath = ROOTFILEDIR;
    $classFilePath .= str_replace('\\', DIRECTORY_SEPARATOR, $classFullName);
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

function applog($category, $message) {
    $log = "[".date("Y/m/d H:i:s T")."][".$category."][".$message."]".PHP_EOL;
    $logfile = ROOTFILEDIR . STDLOG;
    file_put_contents($logfile, $log, FILE_APPEND);
}

?>