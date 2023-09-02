<?php
include 'connection.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "delete from userpage where id = $id");

if ($result == true){
    
 echo '<script>'. "alert('Are you sure u want to remove')".'</script>';
    header('location: adminpatienttable.php');
}
else{
    echo '<script>'. "alert('Unable to remove record')".'</script>';
}

