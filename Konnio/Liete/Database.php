<?php
namespace Konnio\Liete;

class Database
{
    private string $host;
    private string $port;
    private string $user;
    private string $password;
    private string $databasename;
    private string $charset;
    
    public function __construct($host, $port, $user, $password, $databasename, $charset){
        applog("INFO","Started Database constructor");
        $this->host = $host;
        $this->port = $port;
        $this->user = $user;
        $this->password = $password;
        $this->databasename = $databasename;
        $this->charset = $charset;
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
     * @return mixed
     */
    public function getDatabasename()
    {
        return $this->databasename;
    }

    /**
     * @return mixed
     */
    public function getCharset()
    {
        return $this->charset;
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
        applog("DEBUG","running sql: " . $query);
        $options = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $dsn = "mysql:host=$this->host;dbname=$this->databasename;port=$this->port";
        try {
            $pdo = new \PDO($dsn, $this->user, $this->password, $options);
            $stmt = $pdo->query($query);
            $result = $stmt->fetch();

        } catch (\PDOException $e) {
            //throw new \PDOException($e->getMessage(), (int)$e->getCode());
            applog("ERROR","Database created an exception " . $e->getMessage() . "-" . $e->getCode());
            $result = false;
        }

        return $result;

    }
    
    

    
    
}

