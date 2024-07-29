<?php

session_start();

require "functions.php";

$username = $_POST['username'];
$job_title = $_POST['job_title'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$id = $_POST['id'];

edit_info($username, $job_title, $phone, $address, $id);

set_flash_message(name:'success', message:'Профиль успешно обновлен');
redirect_to(path:"page_profile.php?id=$_POST[id]");
?>