<?php
require_once('model/config.php');
$db = new dbConfig();
if(isset($_GET['controller'])){
  $controller = $_GET['controller'];
}
else{
  $controller = "";
}
switch($controller){
  case 'user':
    require_once "controller/user.php";
    break;
  case 'login':
    require_once "controller/login.php";
    break;
  case 'product':
    require_once "controller/product.php";
    break;
  case 'category':
    require_once "controller/category.php";
    break;
  case 'order':
    require_once "controller/order.php";
    break;
  default:
    require_once "controller/index.php";
    break;
}