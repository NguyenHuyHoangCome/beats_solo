<?php
require_once "./model/user.php";
$conncect = $db->connect();
$user = new User($conncect);

if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = "";
}
switch ($action){
    default:
        session_start();
        if (isset($_POST['user']) && isset($_POST['pass'])){
            function validate($data){
                $data = trim($data);
                return $data;
            }
            $username= validate($_POST['user']);
            $password = validate($_POST['pass']);
            if(empty($username) || empty($password)){
                $error = "Not null";
            }
            else{
                $stmt = $user->checkLog($username,$password);
                if($stmt->rowCount()===1){
                    $userdb = $stmt->fetch();
                    $user_id = $userdb['id'];
                    $user_user = $userdb['username'];
                    $user_pass = $userdb['password'];
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['user_user'] = $user_user;
                    // $_SESSION['user_pass'] = $user_pass;
                    header("location:index.php");
                }
                else{
                    $error = "Incorect Username or Password";
                }
            }

        }
        require_once "view/login.php";
        break;
}