<?php
class Order
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
        $query = "SELECT * FROM orders WHERE active='0' AND is_completed='0'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function getDataCom(){
        $query = "SELECT * FROM orders WHERE active='1' AND is_completed='0'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function getDataCompleted(){
        $query = "SELECT * FROM orders WHERE active='1' AND is_completed='1'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function delete($id){
        $sql = "DELETE FROM `orders` WHERE id_order=?";
        $stmt= $this->conn->prepare($sql);
        $stmt->execute([$id]);
    }
    public function update($id){
        $sql = "UPDATE `orders` SET `id_user`=:id_user,`active`='1' WHERE `id_order`=:id_order";
        $stmt= $this->conn->prepare($sql);
        $stmt->execute($id);
    }
    public function updateDone($id){
        $sql = "UPDATE `orders` SET `is_completed`='1' WHERE `id_order`=:id_order";
        $stmt= $this->conn->prepare($sql);
        $stmt->execute($id);
    }
    public function updateNotDone($id){
        $sql = "UPDATE `orders` SET `is_completed`='0' WHERE `id_order`=:id_order";
        $stmt= $this->conn->prepare($sql);
        $stmt->execute($id);
    }
    public function getOne($id){
        $query = "SELECT * FROM orders WHERE id_order=?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetchAll();
        return $result;
    }
    public function getCartItem($id){
        $query = "SELECT * FROM cart_item WHERE id_cart=?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetchAll();
        return $result;
    }
    public function getPro($id){
        $query = "SELECT * FROM product WHERE id_product=?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetchAll();
        return $result;
    }
    public function getSearch($title){
        $query = "SELECT * FROM category1 WHERE name_category1 LIKE '%$title%'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function getMoney(){
        $query = "SELECT SUM(total_money) AS money FROM `orders` WHERE NOT (month(CURRENT_DATE)-month(created_at)>1)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function getOrder(){
        $query = "SELECT COUNT(*) AS tong_order FROM `orders` WHERE NOT (month(CURRENT_DATE)-month(created_at)>6)";
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