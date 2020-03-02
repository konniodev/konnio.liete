<?php
namespace classes;
require_once '../config.inc';

class Database
{
    private string $host;
    private string $port;
    private string $user;
    private string $password;
    
    public function __construct($host, $port, $user, $password){
        $this->host = $host;
        $this->port = $port;
        $this->user = $user;
        $this->password = $password;
    }
    
    public function __destruct(){
        
    }
    
    
}

