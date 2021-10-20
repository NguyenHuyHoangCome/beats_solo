<?php
class User
{
    // private $conn;
    // public $id;
    // public $user;
    // public $pass;
    // public $name;

    function __construct($db)
    {
        $this->conn =$db;
    }

    public function getData(){
        $query = "SELECT * FROM user";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function getOne($id){
        $query = "SELECT * FROM user WHERE username='$id'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function checkLog($username,$password){
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    //hanh dong them sua xoa
    public function action($sql){
        $this->conn->exec($sql);
    }
}