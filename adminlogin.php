

<?php
include 'connection.php';
session_start();
if(isset($_POST['submit'])){
    $Adminname = $_POST['Adminname'];
    $Password= $_POST['Password'];

    $result = mysqli_query($conn,"Select * from adminpage where Adminname =  '$Adminname' && Password  = '$Password' " );
    $result1 =mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) ==1){
        echo '<script>'. "alert('Successful login ')".'</script>';
      
        $_SESSION['Adminname'] = $Adminname;
        $_SESSION['doctorid'] =  $result1['id'];
        header('Refresh:3; url = doctor_dash.php');

    }else{
        echo '<script>'. "alert('Email or username is incorrect')".'</script>';
    }

}
?>
<!DOCTYPE html>
<html lang="en">


<!-- login23:11-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Shield-Care Hospital</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
               
                    <form action="adminlogin.php" class="form-signin" method ="post">
						<div class="account-logo">
                            <a href="index-2.html"><img src="assets/img/logo-dark.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Username or Email</label>
                            <input type="text" autofocus="" class="form-control" name = "Adminname" placeholder = "Email or Username" >
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name = "Password" placeholder ="Password">
                        </div>
                        <div class="form-group text-right">
                           
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn" name ="submit"> Login </button>
                        </div>
                        <div class="text-center register-link">
                            Don’t have an account? <a href="adminregister.php">Register Now</a>
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


<!-- login23:12-->
</html>
