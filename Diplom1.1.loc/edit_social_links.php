<?php

session_start();

require "functions.php";

$telegram = $_POST['telegram'];
$instagram = $_POST['instagram'];
$vk = $_POST['vk'];
$id = $_POST['id'];

echo update_social_links($telegram, $instagram, $vk, $id);

set_flash_message(name:"success", message:"Социальные сети добавлены!");
redirect_to(path:"page_profile.php?id=$_POST[id]");
?>