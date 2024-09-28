<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "password";
$db_name = "student_demo";


$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if(!$conn) {
    echo "connection failed";
}