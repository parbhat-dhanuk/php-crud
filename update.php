<?php



include("connect.php");







//get data

$name = $_POST["name"];
$address = $_POST["address"];
$contact = $_POST["contact"];

$id =  $_POST["id"];

//query insert ko lagi

$query = "UPDATE student SET name='$name', contact='$contact', address='$address' WHERE id='$id' ";

//query execute

if ($conn->query($query) === true) {
    // echo("Successfully inserted");
    header("location:display.php");
} else {
    echo ("Error");
}
