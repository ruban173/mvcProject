<?php


class User
{
   public $id;
   public $first_name;
   public $middle_name;
   public $last_name;
   public $email;
   public $password;
   public $photo;

    private $db;
    private $_user;
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

    public function __sleep()
    {
        return ['first_name','middle_name','last_name','email','password','foto'];
    }

    public function __wakeup()
    {
      //  return $this->first_name;
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
            '$this->photo',
            '$this->type',
            '$this->status'
           )";
       $result=$this->db->exec($sql);
       if(!$result)
          throw new  Exception("Не удалось создать пользователя");
       return true;
   }

   public function findUserEmail($email){
       $sql=  "SELECT * FROM ".self::TABLE."  WHERE email='$email' ;";
       $result=$this->db->query($sql);
       $this->_user=$result->fetchObject("User");
       if($this->_user==null) return false;
       return $this->_user;
   }
    public function findUserPassword($password){

        if($this->_user->password===$password) return $this->_user;
        return false;
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

    public static function getUser(){
        if (!self::isGuest()) return unserialize($_COOKIE['user']);
        return false;
    }

    public static function isGuest(){
        if ($_COOKIE['user']) return false;
        return true;
    }

}