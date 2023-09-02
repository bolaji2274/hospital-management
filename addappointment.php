



<?php
 include 'connection.php';


 if (isset ($_POST['submit'])){
    
   
    $Age = $_POST['Age'];
    $DoctorName = $_POST['DoctorName'];
    $Department = $_POST['Department'];
    $specialty = $_POST['specialty'];
    $AppointmentDate = $_POST['AppointmentDate'];
    $AppointmentTime = $_POST['AppointmentTime'];
    $messages = $_POST['messages'];
  
    
 
    $check_age = mysqli_query($conn, "Select * from appointment where Age = 'Age'");
    
   
    if(strlen($Age) <= 4){
        echo '<script>'. "alert('Your Name must match registered one')".'</script>';
    
   

  
    }else{
        $result = mysqli_query($conn, "Insert into appointment ( Age, DoctorName, Department, specialty, AppointmentDate, AppointmentTime, messages) value 
        ( '$Age', '$DoctorName', '$Department',  '$specialty', '$AppointmentDate','$AppointmentTime', '$messages')");

        if ($result == True){
            echo '<script>alert("Appointment Created Successful")</script>';
       
            $_SESSION['DoctorName'] = $DoctorName;
           
        }
    }
    
 }
 ?>
<!DOCTYPE html>
<html lang="en">


<?php
include 'connection.php';

  session_start();
if(!isset($_SESSION['Adminname'])){
    header('location:adminlogin.php');
 
}
$Adminname = $_SESSION['Adminname'];
$result = mysqli_query ($conn, "Select * from adminpage where Adminname = '$Adminname' or Email = '$Adminname'");
$row = mysqli_fetch_assoc($result);
?>

<!-- add-appointment24:07-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Shield-Care Hospital</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="index-2.html" class="logo">
					<img src="assets/img/logo.png" width="35" height="35" alt=""> <span>Preclinic</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown d-none d-sm-block">
                   
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                     
                </li>
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"> </a>
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
                            <span>online</span>
                    </a>
					<div class="dropdown-menu">
                    <a class="dropdown-item" href="logout.php">Logout</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="active">
                            <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li >
                            <a href="department.php"><i class="fa fa-hospital-o"></i> <span>Departments</span></a>
                        </li>
						<li>
                            <a href="admindoctable.php"><i class="fa fa-stethoscope" aria-hidden="true"></i> <span>Doctors</span></a>
                        </li>
                        
                        <li>
                            <a href="adminpatienttable.php"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                        </li>
                        <li>
                            <a href="notification.php"><i class="fa fa-calendar"></i> <span>Noticeboard</span></a>
                        </li>
                        <li>
                            <a href="appointment.php"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                        </li>
                        <li >
                            <a href="schedule.php"><i class="fa fa-calendar-check-o"></i> <span>Doctor Schedule</span></a>
                        </li>
                       
                        
                        
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Appointment</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                    <form action="addappointment.php" method = "post" class="form-signin">
						<div class="account-logo">
                            <a href="index-2.html"><img src="assets/img/logo-dark.png" alt=""></a>
                        </div>
                     
                        <div class="form-group">
                            <label>Name </label>
                            <input type="text" class="form-control" name = "Age">
                        </div>
                        <div class="form-group">
                       <?php $query = mysqli_query ($conn, "select * from appointment");
                                if((mysqli_num_rows($query)>0)){
                                    $options = (mysqli_fetch_all($query,MYSQLI_ASSOC));
                                    
                                    }
                                        ?> 
                                        <label>Doctor</label>
                                        <select class="select" name ="DoctorName">
											<option>Select</option>
                                            <?php foreach($options as $option){
                                                ?>
											<option><?php echo $option ['DoctorName']?></option>
                                            <?php
                                            }
                                            ?>
										
                                        </select>
                                      
                                    </div>
                        <div class="form-group">
                            <label>Department</label>
                           
                            <input type="text" class="form-control" name="Department" >
                        </div>
                        <div class="form-group">
                            <label>Patient Phone Number</label>
                           
                            <input type="text" class="form-control" name="specialty" >
                        </div>
                        <div class="form-group">
                        <div class="cal-icon">
                            <label>Appointment Date</label>
                            <input type="text" type="text" class="form-control datetimepicker" name="AppointmentDate" >
                        </div>
                    </div>
                        
                        <div class="form-group">
                            <label>Appointment Time</label>
                            <div class="time-icon">
                            <input type="text" class="form-control" id="datetimepicker3" name="AppointmentTime" >
                            </div>
                        </div>
                    
                        
                        <div class="form-group">
                            <label>Message</label>
                            <textarea cols="30" rows="4" class="form-control" name="messages"></textarea>
                           
                        </div>
                        
                        <div class="form-group checkbox">
                            <label>
                                <input type="checkbox"> I have read and agree the Terms & Conditions
                            </label>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit" name ="submit">Create Appoinment</button>
                        </div>
                       
                    </form>
                        
                    </div>
                </div>
            </div>
			
                    
					
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
	<script>
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'

                });
            });
     </script>
</body>


<!-- add-appointment24:07-->
</html>
