<?php
class Product
{
    private $conn;
    // public $id;
    // public $user;
    // public $pass;
    // public $name;

    function __construct($db)
    {
        $this->conn =$db;
    }

    public function getData(){
        $query = "SELECT * FROM product";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function countPro(){
        $query = "SELECT * FROM product";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function getSearch($title){
        $query = "SELECT * FROM product WHERE title LIKE '%$title%'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function getOne($id){
        $query = "SELECT * FROM product WHERE id_product='$id'";
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
    public function count(){
        $query = "SELECT COUNT(id_product) AS numPro FROM product";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function tongthang(){
        $query = "SELECT SUM(quantity) AS tong FROM `cart_item`,`cart`,`orders` WHERE cart_item.id_cart=cart.id_cart AND orders.id_cart= cart.id_cart AND NOT (month(CURRENT_DATE)-month(created_at)>1)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function tong(){
        $query = "SELECT SUM(quantity) AS tongsl FROM `cart_item`";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function insert($data){
        $sql = "INSERT INTO `product`(`title`, `description`, `id_cate`, `price`, `active`, `sale_price`, `inventory`, `id_cate1`, `picture`) VALUES (:title,:description,:id_cate,:price,:active,:sale_price,:inventory,:id_cate1,:picture)";
        $stmt= $this->conn->prepare($sql);
        $stmt->execute($data);
    }
    public function delete($id){
        $sql = "DELETE FROM `product` WHERE id_product=?";
        $stmt= $this->conn->prepare($sql);
        $stmt->execute([$id]);
    }
    public function update($data){
        $sql = "UPDATE `product` SET `title`=:title,`description`=:description,`id_cate`=:id_cate,`price`=:price,`active`=:active,`sale_price`=:sale_price,`inventory`=:inventory,`id_cate1`=:id_cate1,`picture`=:picture WHERE id_product=:id_product";
        $stmt= $this->conn->prepare($sql);
        $stmt->execute($data);
    }
    //hanh dong them sua xoa
    public function action($sql){
        $this->conn->prepare($sql);
    }
}