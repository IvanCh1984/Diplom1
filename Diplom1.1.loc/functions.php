<?php

session_start();

function get_user_by_email($email){
    $pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");
    $sql = "SELECT * FROM diplom1_create_user WHERE email=:email";
    $statement = $pdo -> prepare($sql);
    $statement -> execute(["email" => $email]);
    $user = $statement -> fetch(PDO::FETCH_ASSOC);
    return $user;
}

function set_flash_message($name, $message){
    $_SESSION[$name] = $message; 
}

function redirect_to($path){
    header("Location: {$path}");
    exit;
}

function add_user($email, $password){
    $pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");
    $sql = "INSERT INTO diplom1_create_user (username, job_title, phone, address, email, password, status, image, telegram, instagram, vk, role) VALUES (:username, :job_title, :phone, :address, :email, :password, :status, :image, :telegram, :instagram, :vk, :role)";
    $statement = $pdo -> prepare($sql);
    $statement -> execute(["username" => '', "job_title" => '', "phone" => '', "address" => '', "email" => $email, "password" => password_hash($password, algo:PASSWORD_DEFAULT), "status" => '', "image" => '', "telegram" => '', "instagram" => '', "vk" => '', "role" => 'user']);
    return $pdo ->lastInsertId();
} 

function edit_info($username, $job_title, $phone, $address, $id) {
    $pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");
    $sql = "UPDATE diplom1_create_user SET username = :username, job_title = :job_title, phone = :phone, address = :address WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement -> execute(["username" => $username, "job_title" => $job_title, "phone" => $phone, "address" => $address, "id" => $id]);
}

function update_user($email, $password, $id) {
    $pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");
    $sql = "UPDATE diplom1_create_user SET email = :email, password = :password WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement -> execute(["email" => $email, "password" => password_hash($password, algo:PASSWORD_DEFAULT), "id" => $id]);
}

function update_status($status, $id) {
    $pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");
    $sql = "UPDATE diplom1_create_user SET status = :status WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement -> execute(["status" => $status, "id" => $id]);
}

function update_social_links($telegram, $instagram, $vk, $id) {
    $pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");
    $sql = "UPDATE diplom1_create_user SET telegram = :telegram, instagram = :instagram, vk = :vk WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement -> execute(["telegram" => $telegram, "instagram" => $instagram, "vk" => $vk, "id" => $id]);
}

function uploadImage($image) {

    $extension = pathinfo($image['name'], PATHINFO_EXTENSION);
    $filename = uniqid() . "." . $extension;
  
    move_uploaded_file($image['tmp_name'], "upload/" . $filename);
    return $filename;
}

function add_create_user($username, $job_title, $phone, $address, $email, $password, $status, $filename, $telegram, $instagram, $vk) {
    $pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");
    $sql = "INSERT INTO diplom1_create_user (username, job_title, phone, address, email, password, status, image, telegram, instagram, vk) 
    VALUES (:username, :job_title, :phone, :address, :email, :password, :status, :image, :telegram, :instagram, :vk)";
    $statement = $pdo -> prepare($sql);
    $statement -> execute(["username" => $username, "job_title" => $job_title, "phone" => $phone, "address" => $address,"email" => $email, 
    "password" => password_hash($password, algo:PASSWORD_DEFAULT), "status" => $status, "image" => $filename, "telegram" => $telegram, 
    "instagram" => $instagram, "vk" => $vk]);
}

function update_image($filename, $id) {
    $pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");
    $sql = "UPDATE diplom1_create_user SET image = :image WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement -> execute(["image" => $filename, "id" => $id]);
}
?>