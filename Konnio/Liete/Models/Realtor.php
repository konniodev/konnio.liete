<?php
use Konnio\Liete\Database;
namespace Konnio\Liete\Models;

class Realtor
{
    private string $email;
    private string $password;
    private string $fullName;
    private string $mobile;
    private string $creci;
    
    public function __construct(string $email, string $password, string $fullName, string $mobile, string $creci){
        //Construct
        applog("INFO","Started Realtor constructor");
        $this->email = $email;
        $this->password = $password;
        $this->fullName = $fullName;
        $this->mobile = $mobile;
        $this->creci = $creci;
    }
    
    public function __destruct(){
        
    }

    public function create(){
         $sql = "insert into `realtors` 
        (`rea_id`, `rea_password`, `rea_fullName`, `rea_email`, `rea_mobile`, `rea_creci`) 
        VALUES (NULL, '".sha1($this->password)."', '$this->fullName', '$this->email', '$this->mobile', '$this->creci');";
        $db = new \Konnio\Liete\Database(DATABASEHOST, DATABASEPORT, DATABASEUSER, DATABASEPASSWORD, DATABASENAME, DATABASECHARSET);
        $result = $db->querySql($sql);
    }
}

