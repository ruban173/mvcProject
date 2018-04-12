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

    private $db;

   const TABLE="users";

   function __construct()
   {
       try{
           $db=Config::getInstance()->getParams('db');
           $this->db=new PDO("mysql:host=$db[host];dbname=$db[base]", $db[user], $db[password],$opt = [
               PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
               PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
               PDO::ATTR_EMULATE_PREPARES   => false,
           ]);
       }
       catch (PDOException $e){
           echo $e->getMessage();
       }

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