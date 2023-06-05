<?php
session_start();
include_once('./src/connect.php');
$_SESSION['loginMsg'] = false;


if (isset($_POST['send'])) {
    $id = mysqli_real_escape_string($conn, $_SESSION['id']);
    $name = $_POST['name'];
    $user = $_POST['user'];
    $currentPassword = hash('sha512', $_POST['currentPassword']);
    $password = hash('sha512', $_POST['newPassword']);
    $confirmPassword = hash('sha512', $_POST['confirmPassword']);
    $defaultPassword = '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2';
    
    $sql = mysqli_query($conn, "UPDATE users SET name = '$name', user = '$user' WHERE id = '$id'");


    if ($currentPassword !== $defaultPassword) {
        $sql = mysqli_query($conn, "SELECT password FROM users WHERE id = '$id'");
        $data = mysqli_fetch_assoc($sql);
        if ($data['password'] === $currentPassword) {

            $sql = mysqli_query($conn, "UPDATE users SET password = '$password' WHERE id = '$id'");
            $_SESSION['login'] = false;
            $_SESSION['id'] = '';
        } else {
            $_SESSION['loginMsg'] = '<div id="loginMsg"><span>incorrect current password</span></div>';
        }
    }

    header('Location: /login');
}