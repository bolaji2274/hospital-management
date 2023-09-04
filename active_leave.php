<?php 
include 'connection.php';
$id =$_GET['id'];
$status =$_GET['status'];
$updatequery ="UPDATE  leavetable SET status =$status where id =$id";
if(mysqli_query($conn,$updatequery)){
echo '<script>alert("leave accepted")</script>';
header('location:leave.php');
}


?>