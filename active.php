<?php 
include 'connection.php';
$id =$_GET['id'];
$status =$_GET['status'];
$updatequery ="UPDATE  appointment SET status =$status where id =$id";
if(mysqli_query($conn,$updatequery)){
echo '<script>alert("Appointment accepted")</script>';
header('location:appointment.php');
}


?>