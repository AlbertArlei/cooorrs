<?php
include_once('./src/connect.php');

$user = hash('sha512', $_POST["user"]);
$password = hash('sha512', $_POST["password"]);

if (isset($_POST["create"])) {
    $name = $_POST["name"];
    $user = hash('sha512', $_POST["user"]);
    $password = hash('sha512', $_POST["password"]);
    $sql = mysqli_query($conn, "INSERT INTO users (name, user, password) VALUES ('$name', '$user', '$password')");
}

if (isset($_POST["login"])) {

    $sql = mysqli_query($conn, "SELECT id, name, user, password FROM users WHERE user='$user' AND password='$password'");

    while ($data = mysqli_fetch_assoc($sql)) {
        echo 'id = ' . $data['id'] . '</br>';
        echo 'name = ' . $data['name'] . '</br>';
        echo 'usuario = ' . $data['user'] . '</br>';
        echo 'password = ' . $data['password']  . '</br>';
    }
}