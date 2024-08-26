<?php
include("connect.php");

//query read ko lagi

$getquery = "SELECT * FROM student";

$data = $conn->query($getquery);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>

            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Action</th>

        </tr>
        <?php
        if ($data->num_rows > 0) {
            foreach ($data as $student) {
                echo ("
        <tr>
    <td>" . $student['id'] . "</td>
    <td>" . $student['name'] . "</td>
    <td>" . $student['address'] . "</td>
    <td>" . $student['contact'] . "</td>
     <td> <a href='edit.php?id=" . $student['id'] . " '> edit </a></td>
    <td> <a href='delete.php?id=" . $student['id'] . " '> delete </a></td>
    
</tr>
        ");
            }
        }
        ?>

    </table>

   
</body>

</html>