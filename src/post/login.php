<?php
include_once('./src/connect.php');
session_start();
$logged = false;
$jsonPayload = file_get_contents('php://input');
$create = json_decode($jsonPayload);

if (isset($create->create)) {
    $name = mysqli_real_escape_string($conn, $create->name);
    $user = mysqli_real_escape_string($conn, $create->user);
    $password = hash('sha512', $create->password);

    $sql = mysqli_query($conn, "SELECT * FROM users WHERE user = '$user'"); // AND password = '$password'

    if ($sql->num_rows > 0) {
        http_response_code(409);
        $message = ['message' => 'username in use'];
        header('Content-Type: application/json');
        echo json_encode($message);
        
    } else {
        $sql = mysqli_query($conn, "INSERT INTO users (name, user, password) VALUES ('$name', '$user', '$password')");
        http_response_code(201);
    }
}

if (isset($_POST["login"])) {   
    $sql = mysqli_query($conn, "SELECT id FROM users WHERE user='$user' AND password='$password'");
    
    if ($sql->num_rows === 1) {
        $logged = true;
        $data = mysqli_fetch_assoc($sql);
        $_SESSION['id'] = $data['id'];
        $_SESSION['login'] = $logged;
        $_SESSION['loginMsg'] = '<div id="loginMsg"><span></span></div>';
        
        header('Location: /login');
    } else {
        $logged = false;
        echo '0';
        $_SESSION['login'] = $logged;
        header('Location: /login');
        
    }

}