<?php
include("connect.php");


$id=$_GET["id"];

$getquery= "SELECT * FROM student WHERE id='$id'  ";

$data= $conn->query($getquery);


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="update.php" method="post" >
        <h1>Student Data</h1>
         
        <?php 
        if($data -> num_rows > 0){

            $row= $data -> fetch_assoc();

            ?>
       

         <input type="hidden" name="id"  value="<?php echo($row['id']); ?>" >

        Name:<input  type="text"  name="name"  value="<?php echo($row['name']); ?>" >
        <br><br>
        Address:<input type="text" name="address" value="<?php echo($row['address']); ?> ">
        <br><br>
        Contact:<input type="text" name="contact" value="<?php echo($row['contact']); ?>" >
        <br><br>
        <input type="submit" value="save">


    </form>
<?php
}
?>
</body>

</html>