<?php
//  Kiem tra dang nhap
// Neu chua chua dang nhap thi bao loi
session_start();
$checkLoggedIn = (isset($_SESSION["user_id"]) && isset($_SESSION["user_user"])) ? 1 : 0;
if ($checkLoggedIn == 0) {
    echo "Access Denny !";
    header("Location: index.php?controller=login");
}
function logout(){
    session_start();
    session_unset();
    session_destroy();
    header("Location: index.php");
}