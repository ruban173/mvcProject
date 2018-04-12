<?php

/**
 * Created by PhpStorm.
 * User: ruban
 * Date: 12.04.2018
 * Time: 19:20
 */
class RegisterForm extends Form
{
    public function validate(){
        $this->errorMessages=[
            'first_name'=>(strlen($this->first_name)==0)?
                "Введите имя":(!is_string($this->first_name))?
                    "Не является строкой":true,
            'middle_name'=>(strlen($this->middle_name)==0)?
                "Введите отчество":(!is_string($this->first_name))?
                    "Не является строкой":true,
            'last_name'=>(strlen($this->last_name)==0)?
                "Введите фимилию":(!is_string($this->first_name))?
                    "Не является строкой":true,
            'email'=>(strlen($this->email)==0)?
                "Введите email":(!filter_var($this->email,FILTER_VALIDATE_EMAIL))?
                    "Не является email":true,
            'password'=>(strlen($this->password)==0)?
                "Введите пароль":!($this->password===$this->double_password)?
                    "Пароли не совпадают":true,
            'foto'=>true,
        ];
    }
}