<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

require "functions.php";

$user = get_user_by_email($email);

if(empty($user)) {
    set_flash_message(name:"error", message:"Неверный логин или пароль!");
    redirect_to(path:"/page_login.php");
    exit;
  }

if(!password_verify($password, $user['password'])) {
    set_flash_message(name:"error", message:"Неверный логин или пароль!");
    redirect_to(path:"/page_login.php");
    exit;
  }

$_SESSION['user'] = ["id" => $user['id'], "role" => $user['role']];
redirect_to(path:"/users.php");
exit;

?>