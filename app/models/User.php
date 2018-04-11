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

   public $errorMessages;

   private $db;

   const TABLE="users";

   function __construct()
   {
       try{
           $db=Config::getInstance()->getParams('db');
           $this->db=new PDO("mysql:host=$db[host];dbname=$db[base]", $db[user], $db[password]);
       }
       catch (PDOException $e){
           echo $e->getMessage();
       }

   }

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
       $result=0;
     foreach ($this->errorMessages as $item) if ($item===true) $result++;

     return $result===count($this->errorMessages);


   }
    private function quote(){
        $this->first_name=$this->db->quote($this->first_name);
        $this->middle_name=$this->db->quote($this->middle_name);
        $this->last_name=$this->db->quote($this->last_name);
        $this->email=$this->db->quote( $this->email);
        $this->password=$this->db->quote($this->password);
        $this->foto=$this->db->quote($this->foto);
        $this->type=$this->db->quote($this->type);
        $this->status=$this->db->quote($this->status);
}

   public function create(){

       $sql="INSERT INTO ".self::TABLE."
            ( first_name, middle_name, last_name, email, password, foto, type, status) 
            VALUES (
            '$this->first_name',
            '$this->middle_name',
            '$this->last_name',
            '$this->email',
            '$this->password', 
            '$this->foto',
            '$this->type',
            '$this->status'
           )";

       $result=$this->db->exec($sql);
       if(!$result)
          throw new  Exception("Не удалось создать пользователя");
       return true;
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