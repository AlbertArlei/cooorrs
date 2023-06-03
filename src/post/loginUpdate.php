<?php
session_start();
include_once('./src/connect.php');

if (isset($_POST['send'])) {
    $id = mysqli_real_escape_string($conn, $_SESSION['id']);
    $name = $_POST['name'];
    $user = $_POST['user'];
    $currentPassword = hash('sha512', $_POST['currentPassword']);
    $password = hash('sha512', $_POST['newPassword']);
    $confirmPassword = hash('sha512', $_POST['confirmPassword']);

    $sql = mysqli_query($conn, "UPDATE users SET name = '$name', user = '$user' WHERE id = '$id'");

    $sql = mysqli_query($conn, "SELECT password FROM users WHERE id = '$id' AND password = '$currentPassword'");
    $data = mysqli_fetch_assoc($sql);
    if ($data['password'] === $currentPassword) {
        echo 'dentro do if';

    } else {
        $_SESSION['loginMsg'] = '<div class="loginMsg"><span>incorrect current password</span></div>';
    }
}