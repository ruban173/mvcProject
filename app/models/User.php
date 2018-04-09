<?php


class User
{
   public $first_name;
   public $middle_name;
   public $last_name;
   public $email;
   public $password;
   public $double_password;
   public $foto;

   function __construct()
   {
   }

   public function validate(){

   }
   public function create(){
       $db=Config::getInstance()->getParams('db');
       $pdo = new PDO($db[host], $db[user], $db[password]);
       $sql='';
       $pdo->query($sql);
   }
    public function update(){

    }
    public function delete(){

    }
    public function getStatus(){

    }
    public function setStatus(){

    }
    public function getType(){

    }
    public function setType(){

    }

}