<?php

include("connect.php");

$id = $_GET["id"];

$query = "DELETE FROM student WHERE id='$id' ";

if ($conn->query($query) === true) {
    // echo("Successfully deleted");
    header("location:display.php");
} else {
    echo ("Error");
}
