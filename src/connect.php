<?php

$host = "localhost:94";
$userName = "root";
$password = "";
$dbName = "cooorrs";

$conn = new mysqli("$host", "$userName", "$password", "$dbName");

if($conn->connect_error){
    echo "erro";
}
echo "deu certo";