<?php 
session_start();

$user = $_SESSION['user'];

function is_logged_in() {
    if(isset($_SESSION['user'])) {
        return true;
    }
        return false;
}

function is_not_logged_in() {
    return !is_logged_in();
}

function redirect_to($path){
    header("Location: {$path}");
    exit;
}

function get_users() {
    $pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");
    $statement = $pdo -> query("SELECT * FROM diplom1_create_user");
    return $statement -> fetchAll(PDO::FETCH_ASSOC);
}

function get_user_by_id(){
    $pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");
    $sql = "SELECT * FROM diplom1_create_user WHERE id=:id";
    $statement = $pdo -> prepare($sql);
    $statement -> execute(["id" => $_GET['id']]);
    $user = $statement -> fetch(PDO::FETCH_ASSOC);
    return $user;
}

function get_authenticated_user() {
    if(is_logged_in()) {
        return $_SESSION['user'];
    }
        return false;
}

function is_admin($user) {
    if(is_logged_in()){
        if($user["role"] === "admin") {
            return true;
        }
            return false;
    }
}

function is_equal($user, $current_user) {
    if($user["id"] == $current_user["id"]) {
        return true;
    }
        return false;
}

function set_flash_message($name, $message){
    $_SESSION[$name] = $message; 
}

function delete_user($id){
    $pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");
    $sql = "DELETE FROM diplom1_create_user WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement -> execute(["id" => $id]);
}

?>