<?php
session_start();

require "functions.php";

$email = $_POST["email"];
$password = $_POST["password"];

$user = get_user_by_email($email);

if(!empty($user)) {
    set_flash_message(name:"danger", message:"Этот электронный адрес уже занят, введите новый!");
    redirect_to(path:"/page_register.php");
    exit;  
}

add_user($email, $password);

set_flash_message(name:"success", message:"Регистрация успешна!");
redirect_to(path:"/page_login.php");
exit;

?>