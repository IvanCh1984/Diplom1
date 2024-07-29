<?php

session_start();

require "functions_users.php";

if(is_not_logged_in()){
    redirect_to(path:"login.php");
}

if(is_admin(get_authenticated_user()) || is_equal($user, get_authenticated_user()) ){
    $user = get_user_by_id();
}else{
    set_flash_message(name:"danger" , message:"Можно редактировать только свой профиль!");
    redirect_to('users.php');
}

if(isset($_GET["id"])){
    $id = $_GET["id"];
    $pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");
    $sql = "SELECT `image` FROM diplom1_create_user WHERE id =$id";
    $stetament = $pdo -> prepare ($sql);
    $stetament -> execute();
    $image = $stetament -> fetch(PDO::FETCH_ASSOC);
    $file = $image['image'];
    file_exists('upload/' . $file);
    unlink('upload/' . $file);

    delete_user($id);
}

if(is_admin(get_authenticated_user())) {
    set_flash_message(name:"success", message:"Пользователь удалён!");
    redirect_to(path:"users.php");
}elseif(is_equal($user, get_authenticated_user())) {
    unset($_SESSION["user"]);
    redirect_to(path:"page_register.php");
}
?>