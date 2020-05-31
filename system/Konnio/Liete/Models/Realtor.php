<?php
use Konnio\Liete\Database;
namespace Konnio\Liete\Models;

class Realtor
{
    private string $login;
    private string $password;
    private string $displayName;
    private string $fullName;
    private string $email;
    private string $mobile;
    private string $creci;
    
    public function __construct(string $login, string $password, string $displayName, string $fullName, string $email, string $mobile, string $creci){
        //Construct
        $this->login = $login;
        $this->password = $password;
        $this->displayName = $displayName;
        $this->fullName = $fullName;
        $this->email = $email;
        $this->mobile = $mobile;
        $this->creci = $creci;
    }
    
    public function __destruct(){
        
    }
    
    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
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
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @return mixed
     */
    public function getCreci()
    {
        return $this->creci;
    }

    /**
     * @param mixed $login
     */
    public function setLogin(string $login)
    {
        $this->login = $login;
    }

    /**
     * @param mixed $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * @param mixed $displayName
     */
    public function setDisplayName(string $displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * @param mixed $fullName
     */
    public function setFullName(string $fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * @param mixed $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile(string $mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @param mixed $creci
     */
    public function setCreci(string $creci)
    {
        $this->creci = $creci;
    }
    
    public function create(){
        $sql = "insert into `realtors` 
        (`rea_id`, `rea_login`, `rea_password`, `rea_displayName`, `rea_fullName`, `rea_email`, `rea_mobile`, `rea_creci`) 
        VALUES (NULL, '$this->login', '".sha1($this->password)."', '$this->displayName', '$this->fullName', '$this->email', '$this->mobile', '$this->creci');";

        $db = new \Konnio\Liete\Database(DATABASEHOST, DATABASEPORT, DATABASEUSER, DATABASEPASSWORD, DATABASENAME, DATABASECHARSET);
        $result = $db->querySql($sql);
    }
}

