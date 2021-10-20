<?php
class Category1
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
        $query = "SELECT * FROM category1";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function insert($data){
        $sql = "INSERT INTO `category1`(`name_category1`, `description`, `id_cate`) VALUES (:name_category1,:description,:id_cate)";
        $stmt= $this->conn->prepare($sql);
        $stmt->execute($data);
    }
    public function delete($id){
        $sql = "DELETE FROM `category1` WHERE id_category1=?";
        $stmt= $this->conn->prepare($sql);
        $stmt->execute([$id]);
    }
    public function update($data){
        $sql = "UPDATE `category1` SET `title`=:title,`description`=:description,`slug`=:slug,`active`=:active WHERE id_category=:id_category";
        $stmt= $this->conn->prepare($sql);
        $stmt->execute($data);
    }
    public function getOne($id){
        $query = "SELECT * FROM category1 WHERE id_category1='$id'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function getSearch($title){
        $query = "SELECT * FROM category1 WHERE name_category1 LIKE '%$title%'";
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