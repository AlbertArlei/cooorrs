<?php
include_once('./src/connect.php');
session_start();
$logged = false;
$user = $_POST["user"];
$password = hash('sha512', $_POST["password"]);

if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $user = mysqli_real_escape_string($conn, $_POST["user"]);
    $password = hash('sha512', $_POST["password"]);

    $sql = mysqli_query($conn, "SELECT * FROM users WHERE user = '$user' AND password = '$password'");

    if ($sql->num_rows > 0) {
        header('Location: /login');

    } else {
        $sql = mysqli_query($conn, "INSERT INTO users (name, user, password) VALUES ('$name', '$user', '$password')");
        header('Location: /login');
    }
}

if (isset($_POST["login"])) {   
    $sql = mysqli_query($conn, "SELECT id FROM users WHERE user='$user' AND password='$password'");
    
    if ($sql->num_rows === 1) {
        $logged = true;
        $data = mysqli_fetch_assoc($sql);
        $_SESSION['id'] = $data['id'];
        $_SESSION['login'] = $logged;
        
        header('Location: /login');
    } else {
        $logged = false;
        echo '0';
        $_SESSION['login'] = $logged;
        header('Location: /login');
    }

}