<?php
include 'connection.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "delete from department where id = $id");

if ($result == true){
    
    echo '<script>'. "alert('Record Deleted Succesful')".'</script>';
    header('location: department.php');
}
else{
    echo '<script>'. "alert('Unable to remove record')".'</script>';
}

