<?php
namespace Konnio\Liete;

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
    
    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $host
     */
    public function setHost(string $host)
    {
        $this->host = $host;
    }

    /**
     * @param mixed $port
     */
    public function setPort(string $port)
    {
        $this->port = $port;
    }

    /**
     * @param mixed $user
     */
    public function setUser(string $user)
    {
        $this->user = $user;
    }

    /**
     * @param mixed $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }
    
    public function querySql(string $query){
        
    }
    
    

    
    
}

