<?php
 include 'connection.php';
 session_start();

 if (isset ($_POST['submit'])){
    $Fullname =$_POST['Fullname'];
    $Adminname = $_POST['Adminname'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Address = $_POST['Address'];
    $Age = $_POST['Age'];
    $Phone = $_POST['phone'];
    $Department = $_POST['department'];
  
   
    $check_email = mysqli_query($conn, "Select * from adminpage where Email = '$Email'");
    $check_password = mysqli_query($conn, "Select * from adminpage where Password = '$Password'");
   
    if(mysqli_num_rows($check_email) > 0){
        echo '<script>'. "alert('Email already exist')".'</script>';
    
    }elseif(mysqli_num_rows($check_password) > 0){
        echo '<script>'. "alert('Password already being taken ')".'</script>';

    }elseif(strlen($Adminname) <=3){
        echo '<script>'. "alert('Username Must be greater than 4 (character)')".'</script>';

    }elseif(strlen($Password) <=5){
        echo '<script>'. "alert('Password Must atleast 8 be (character)')".'</script>';
   
    }elseif(strlen($Age) <= 2){
        echo '<script>'. "alert('Ivalid age (Use This Format 1990-1999')".'</script>';
    
    }else{
        $result = mysqli_query($conn, "Insert into adminpage ( Fullname, Adminname, Email, Password, Address, Age, phone, department) value 
        ('$Fullname', '$Adminname', '$Email', '$Password', '$Address',  '$Age', '$Phone','$Department')");

        if ($result == True){
            echo '<script>alert("You have successful registered")</script>';
            echo '<script>window.location.href= "adminlogin.php"</script>';

            $_SESSION['Adminname'] = $Adminname;
            header("Refresh:10; url=Doctor_dash.php");
        }
    }
    
 }
 ?>



<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Shield-Care Hospital</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
   
</head>

<body>
    <div class="main-wrapper  account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form action="adminregister.php" method = "post" class="form-signin">
						<div class="account-logo">
                            <a href="index-2.html"><img src="assets/img/logo-dark.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control  name" name = "Adminname">
                        </div>
                        <div class="form-group">
                            <label>Fullname</label>
                            <input type="text" class="form-control  name" name = "Fullname">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name = "Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name = "Password" placeholder ="Password">
                        </div>
                        <div class="form-group">
                    
                                    
                                
                       <?php
                     
                       
                       $query = mysqli_query ($conn, "select * from department");
                                if((mysqli_num_rows($query)>0)){
                                    $options = (mysqli_fetch_all($query,MYSQLI_ASSOC));
                                    
                                    }
                                        ?> 
                                        <label>Department</label>
                                        <select class="select" name ="department">
											<option>Select</option>
                                            <?php foreach($options as $option){
                                                ?>
											<option ><?php echo $option ['Department'] ?></option>
                                            <?php
                                            }
                                            ?>
										
                                        </select>
                               
                                 </div>
                       
                        <div class="form-group">
                            <label>phone</label>
                           
                            <input type="text" class="form-control" name="phone" >
                        </div>
                    
                        <div class="form-group">
                            <label>Address</label>
                           
                            <input type="text" class="form-control" name="Address" >
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                           
                            <input type="text" class="form-control" name="Age" >
                        </div>
                        <div class="form-group checkbox">
                            <label>
                                <input type="checkbox"> I have read and agree the Terms & Conditions
                            </label>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit" name ="submit">Signup</button>
                        </div>
                        <div class="text-center login-link">
                            Already have an account? <a href="adminlogin.php">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- register24:03-->
</html>
