<?php
include_once('./src/connect.php');

if(isset($_POST["password"])){
    $user = $_POST["user"];
    $password = $_POST["password"];

    $sql = mysqli_query($conn, "INSERT INTO users (user, password) VALUES ('$user', '$password')");
}