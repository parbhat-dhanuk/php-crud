<?php
//mysqli object-oriented connection

$servername = "localhost";
$username = "root";
$password = "";
$database = "phpcrud"; //database ko name ho

//conection

$conn = new mysqli($servername, $username, $password, $database);

//check connection

// if($conn->connect_error){
//     die("Connection failed" .$conn->connect_error);

// }
// echo ("Connection successfully");
