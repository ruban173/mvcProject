<?php


class LoginForm extends Form
{
    public $email;
    public $password;
    public $_remembe=fals;


    private $_user;


    public function login(){
        $user=new User();
        if($user->findUserEmail($this->email)){
                $this->_user=$user->findUserPassword(md5($this->password));
                if($this->_user) {
                    $obj=serialize($this->_user);
                    if($this->_remembe)setcookie("user", $obj,time()+3600*24);
                         else setcookie("user", $obj);
                         return true;
                }
              else $this->errorMessages=['password'=>'Неверный пароль!'];
        }
        else $this->errorMessages=['login'=>'Неверный Email!'];
        return false;
    }
    public function logout(){
        if(!User::isGuest())
             setcookie("user",serialize($this->_user),time()-3600*24);
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