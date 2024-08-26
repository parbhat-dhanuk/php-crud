<?php



include("connect.php");







//get data

$name = $_POST["name"];
$address = $_POST["address"];
$contact = $_POST["contact"];

//query insert ko lagi

$query = "INSERT INTO student(name,address,contact) VALUES ('$name','$address','$contact')";

//query execute

if ($conn->query($query) === true) {
    // echo("Successfully inserted");
    header("location:display.php");
} else {
    echo ("Error");
}
