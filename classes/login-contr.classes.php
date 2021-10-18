<?php
class loginContr extends Login{
    private $uid;
    private $pwd;

    
    
    public function __construct($uid,$pwd){
    $this->uid = $uid;
    $this->pwd = $pwd;

    
    
    }
    
    public function loginusers(){
    if ($this->emptyInput()== false){
    header("location:../index.php?error=emptyinput");
    exit();    
    }
    
     $this->getUser($this->uid, $this ->pwd ,$this->email);
    
    }
    
    
    
    
    private function emptyInput(){
    //$result;
    if(empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat)|| empty($this->email)){
    $result= true;
    }
    else{
    $result =  true;   
    }
    return $result;
    }
    
    
    private function invalidUid(){
    //$result;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$this->uid)){
    $result = false;    
    }
    else{
    $result = true;
    }
    
    return $result;
    }
    
    
    
    private function invalidEmail(){
    //$result;
    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
        $result = false;
    }else{
    
    $result = true;
    
    }
    return $result;
    }
    
    
    private function pwdMatch(){
    //$result;
    if($this->pwd !== $this->pwdRepeat){
    $result = false;
    }    
    else{
    $result = true;    
    }
    return $result;
    }
    
    
    
    
    }
    