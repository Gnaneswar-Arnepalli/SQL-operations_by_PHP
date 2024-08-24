<?php
require 'connection.php';

if(isset($_GET["submit"])){
   $id = $_GET["id"];
   $name = $_GET["name"];
   $number = $_GET["number"];
   $query= "UPDATE student_data SET name='$name', number='$number' WHERE id='$id'";
   if (mysqli_query($conn,$query))
   {
      echo "<script>alert('data updated successfully');</script> ";
   }
   else
   {
    echo "<script>alert('Error:" .mysqli_error($conn). "');</script>";
   }

}
?>

