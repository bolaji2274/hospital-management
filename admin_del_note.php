<?php
include 'connection.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "delete from notificationboard where id = $id");

if ($result == true){
    
echo '<script>window.alert(" Notification Has been Deleted")</script>';
    header('location: notification.php');
}
else{
    echo '<script>'. "alert('Unable to remove record')".'</script>';
}
