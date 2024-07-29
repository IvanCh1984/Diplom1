<?php

session_start();

require "functions.php";

$email = $_POST['email'];
$password = $_POST['password'];
$id = $_POST['id'];

$user = get_user_by_email($email);

if(!empty($user)) {
    set_flash_message(name:"danger", message:"Этот электронный адрес уже занят, введите новый!");
    redirect_to(path:"security.php?id=$_POST[id]");
    exit;  
  }elseif($_POST['password'] != $_POST["password_confirm"]) {
  set_flash_message(name:"danger", message:"Пароль не совпадает!");
  redirect_to(path:"security.php?id=$_POST[id]");
  exit;
}elseif(empty($_POST['password'] && $_POST["password_confirm"] || $_POST['email'])){
  set_flash_message(name:"danger", message:"Строка пустая: введите email или пароль!");
  redirect_to(path:"security.php?id=$_POST[id]");
  exit;
}
  
echo update_user($email, $password, $id);

set_flash_message(name:"success", message:"Профиль изменён!");
redirect_to(path:"page_profile.php?id=$_POST[id]");
?>