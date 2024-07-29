<?php

session_start();

require "functions.php";

$id = $_POST['id'];
$filename = uploadImage($_FILES['image']);

update_image($filename, $id);

set_flash_message(name:"success", message:"Аватар заменён!");
redirect_to(path:"page_profile.php?id=$_POST[id]");
?>