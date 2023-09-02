<?php session_status();
    session_destroy();
    echo '<script>'. "alert('You are have logged out')".'</script>';
    header("location:index.php");
    exit();
    ?>