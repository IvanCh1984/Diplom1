<?php

session_start();

require "functions.php";

$username = $_POST['username'];
$job_title = $_POST['job_title'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$email = $_POST['email'];
$password = $_POST['password'];
$status = $_POST['status'];
$filename = uploadImage($_FILES['image']);

$telegram = $_POST['telegram'];
$instagram = $_POST['instagram'];
$vk = $_POST['vk'];

$user = get_user_by_email($email);

if(!empty($user)) {
  set_flash_message(name:"danger", message:"Этот электронный адрес уже занят, введите новый!");
  redirect_to(path:"create_user.php");
  exit;  
}else{
  add_create_user($username, $job_title, $phone, $address, $email, $password, $status, $filename, $telegram, $instagram, $vk);
}

set_flash_message(name:"success", message:"Пользователь добавлен!");
redirect_to(path:"users.php");
exit;
?>