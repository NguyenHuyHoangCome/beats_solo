<?php
require_once "./model/user.php";
$conncect = $db->connect();
$userdb = new User($conncect);

if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = "";
}
require_once "config.php";
switch ($action){
    case "add":
        if(isset($_POST['submit'])){
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $name = $_POST['name'];
            if(empty($name) || empty($pass)){
                $error = "Not null";
            }
            else{
                $userdb->action("INSERT INTO user (username,password,name) VALUES ('$user','$pass','$name')");
                header("location:index.php");
            }
        }
        require_once "view/add.php";
        break;
    case "canhan":
        if(isset($_SESSION['user_id'])){
            $id = $_SESSION['user_id'];
            foreach ($userdb->getData("SELECT * FROM user WHERE id='$id'")as $row){
                $id = isset($row['id']) ? $row['id']:'';
                $user = isset($row['username']) ? $row['username']:'';
                $pass = isset($row['password']) ? $row['password']:'';
                $name = isset($row['name']) ? $row['name']:'';
            }
        }
        if(isset($_POST['submit'])){
            $user_new = $_POST['username'];
            $pass_new = $_POST['password'];
            $name_new = $_POST['name'];
            if(empty($pass_new) || empty($user_new)){
                $error = "Not null";
            }
            else{
                $userdb->action("UPDATE user SET username='$user_new', password='$pass_new', name='$name_new'
                WHERE id='$id'");
                $success = "Success";
                require_once "view/canhan.php";
            }
        }
        require_once "view/canhan.php";
        break;
    case "delete":
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $userdb->action("DELETE FROM user WHERE id= '$id'");
            header("Location:index.php");
        }
        break;
    case "search":
        if(isset($_POST['search_user'])){
            $id = $_POST['search_user'];
            if(empty($id)){
                // $error = "Not null";
                require_once "index.php";
            }
            else{
                $data = $userdb->getOne($id);
                require_once "view/index.php";
            }
            
        }
        break;
    case "logout":
        logout();
        break;

}