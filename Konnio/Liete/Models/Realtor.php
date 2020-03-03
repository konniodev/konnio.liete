<?php
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
    
    public function __construct(string $login, string $password, string $displayName, string $fullName, string $email, string $mobile, string $credi){
        //Construct
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
    
}

