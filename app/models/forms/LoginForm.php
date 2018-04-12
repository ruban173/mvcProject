<?php


class LoginForm extends Form
{
    public $email;
    public $password;
    public $_remembe=fals;


    private $_user;

    function __construct()
    {
    }

    public function getUser(){
        $sql=  "SELECT * FROM ".self::TABLE."  WHERE email='$this->email' AND password='$this->password' ;";
        $result=$this->db->query($sql);
        $this->_user=$result->fetchObject("User");
        if($this->_user==null) return false;
        return $this->_user;
    }
    public function login(){
        if ($this->getUser())
            return ($this->_remembe)?setcookie("user",serialize($this->_user),time()+3600*24):
                setcookie("user",serialize($this->_user));
    }
    public function logout(){

    }
    public function validate()
    {
        $this->errorMessages = [

            'email' => (strlen($this->email) == 0) ?
                "Введите email" : (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) ?
                    "Не является email" : true,
            'password' => (strlen($this->password) == 0) ?
                "Введите пароль" : true,

        ];
    }
}