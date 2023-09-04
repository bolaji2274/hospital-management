<?php
include 'connection.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "delete from appointment where id = $id");

if ($result == true){
    
echo '<script>window.alert(" Record Has been Deleted")</script>';
    header('location:appointment.php');
}
else{
    echo '<script>'. "alert('Unable to remove record')".'</script>';
}

