<?php 
require 'connection.php';
if(isset($_GET["submit"]))
{
    $id = $_GET["id"];
    $name = $_GET["name"];
    $number = $_GET["number"];
   $query = "INSERT INTO student_data (id, name, number) VALUES ('$id', '$name', '$number')";
   if (mysqli_query($conn, $query)) 
   {
       echo "<script>alert('Data inserted successfully');</script>";
   } 
   else
    {
       echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>

