<?php
define('admin',"1");
define('user',"2");
class User{
    protected string $name;
    protected string $email;
    public int $role ;
    public function getInfo() { 
        return "name là : ".$this->name."<br/>"." email là : ".$this->email."<br>";
    }
    public function isAdmin() { 
        if($this->role==1){
            echo " là admin";
        }else if($this->role==2){
            echo " là người dùng bình thường";
        }
    }
    public function setName($ts_name){
       $this->name = $ts_name;
    }
    public function setEmail($ts_email){
        $this->email = $ts_email;
    }
    public function setRole($_role){
        $this->role =$_role;
    }
}
$User = new User();
$User->setName("vinh");
$User->setEmail("vinh@abc.com");
$User->setRole(1);
echo $User->getInfo();
$User->isAdmin();
