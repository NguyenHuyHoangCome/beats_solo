<?php
require_once "./model/user.php";
require_once "./model/product.php";
require_once "./model/order.php";

$conncect = $db->connect();
$user = new User($conncect);
$pro = new Product($conncect);
$order = new Order($conncect);


if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = "";
}
require_once "config.php";
switch ($action){
    default:
        $data = $user->getData();
        $pro_dem = $pro->count();
        $pro_thang = $pro->tongthang();
        $order_money = $order->getMoney();
        $order_tong = $order->getOrder();
        $pro_tong = $pro->tong();
        require_once "view/index.php";
        break;
}