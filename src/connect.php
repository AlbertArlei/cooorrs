<?php

$host = "localhost";
$userName = "root";
$password = "";
$dbName = "cooorrs";

$conn = new mysqli("$host", "$userName", "$password", "$dbName");

if($conn->connect_error){
    die("erro" . $conn->connect_error);
}
echo "deu certo";