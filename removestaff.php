<?php
include 'connection.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "delete from staffpage where id = $id");

if ($result == true){
    
    echo '<script>window.alert(" Record Has been Deleted")</script>';
    header('location:adminstafftable.php');
}
else{
    echo '<script>'. "alert('Unable to remove record')".'</script>';
}

