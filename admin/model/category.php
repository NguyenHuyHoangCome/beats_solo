<?php
class Category
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
        $query = "SELECT * FROM category";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function insert($data){
        $sql = "INSERT INTO `category`(`title`, `description`, `slug`, `active`) VALUES (:title,:description,:slug,:active)";
        $stmt= $this->conn->prepare($sql);
        $stmt->execute($data);
    }
    public function delete($id){
        $sql = "DELETE FROM `category` WHERE id_category=?";
        $stmt= $this->conn->prepare($sql);
        $stmt->execute([$id]);
    }
    public function update($data){
        $sql = "UPDATE `category` SET `title`=:title,`slug`=:slug,`description`=:description,`active`=:active WHERE id_category=:id_category";
        $stmt= $this->conn->prepare($sql);
        $stmt->execute($data);
    }
    public function getOne($id){
        $query = "SELECT * FROM category WHERE id_category='$id'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function getSearch($title){
        $query = "SELECT * FROM category WHERE title LIKE '%$title%'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    // public function checkLog($username,$password){
    //     $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    //     $stmt = $this->conn->prepare($query);
    //     $stmt->execute();
    //     return $stmt;
    // }
    // //hanh dong them sua xoa
    // public function action($sql){
    //     $this->conn->exec($sql);
    // }
}