<?php
require 'connection.php';

if(isset($_GET["submit"]))
{
   $id = $_GET["id"];
   
   $query= "DELETE FROM student_data WHERE id='$id'";
   if(mysqli_query($conn,$query))
   {
    if(!empty($id))
   {
     echo " <script> alert('Data deleted successfully');</script>";
   }
   else{
    echo "<script> alert('Error: " . mysqli_error($conn) ."');</script>";
   }
}
else {
    echo "<script>alert('ID is not set or invalid');</script>";
}
}
?>