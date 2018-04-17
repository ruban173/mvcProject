<?php


class RegisterForm extends Form
{
    public $id;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $email;
    public $password;
    public $double_password;
    public $photo;

    function  __construct()
    {
    }

    public function validate(){
        $this->errorMessages=[
            'first_name'=>(empty($this->first_name))?
                "Введите имя":(!is_string($this->first_name))?
                    "Не является строкой":true,
            'middle_name'=>(empty($this->middle_name))?
                "Введите отчество":(!is_string($this->middle_name))?
                    "Не является строкой":true,
            'last_name'=>(empty($this->last_name))?
                "Введите фимилию":(!is_string($this->last_name))?
                    "Не является строкой":true,
            'email'=>(empty($this->email))?
                "Введите email":(!filter_var($this->email,FILTER_VALIDATE_EMAIL))?
                    "Не является email":true,
            'password'=>(empty($this->password))?
                "Введите пароль":!($this->password===$this->double_password)?
                    "Пароли не совпадают":true,
            'photo'=>($this->photo[size]>=2*1024*1024*8)?
                "Слишком большой объем файла": true,
        ];
        foreach ($this->errorMessages as $result)
            if (!is_bool($result)) return false;
        return true;

    }

    public function printValidateInput($name){
        if($this->errorMessages!=null)
            return ($this->errorMessages[$name]===true)?"is-valid":"is-invalid";

    }
    public function printValidateMessage($name){
        if($this->errorMessages!=null)
            return ($this->errorMessages[$name]===true)?
                '<small id="'.$name.'Help" class="form-text  valid-feedback">Успешно</small>'
                :
                '<small  id="'.$name.'Help" class="form-text  invalid-feedback">'. $this->errorMessages[$name].'</small>';
    }

    public function uploadFile($name){
       $type=end(explode(".",basename ($this->photo[name])));
       $name.='.'.$type;
       $path='app/images/'.$name;
        if(isset($this->photo)){
            if(move_uploaded_file($this->photo['tmp_name'],$path)) {
                $this->photo=$name;
                return true;
            }

        }
        return false;
    }
}