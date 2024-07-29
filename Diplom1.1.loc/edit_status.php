<?php

session_start();

require "functions.php";

$status = $_POST['status'];
$id = $_POST['id'];

update_status($status, $id);

set_flash_message(name:"success", message:"Статус изменён!");
redirect_to(path:"page_profile.php?id=$_POST[id]");
?>