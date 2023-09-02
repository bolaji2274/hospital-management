
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

<!DOCTYPE html>
<html lang="en">


<!-- patients23:17-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Shield-Care Hospital</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.min.css">
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
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"></a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">
												<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">V</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">L</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">G</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">V</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
												<p class="noti-time"><span class="notification-time">2 days ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"></a>
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
                       <span>online</span>
                    </a>
					<div class="dropdown-menu">
                    <a class="dropdown-item" href="adminprofile.php">My Profile</a>
                    <a class="dropdown-item" href="adminupdate.php?id=<?php echo $row['id']?>">Edit Profile</a>
                  
                    <a class="dropdown-item" href="logout.php">Logout</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="adminprofile.php">My Profile</a>
                    <a class="dropdown-item" href="adminupdate.php?id=<?php echo $row['id']?>">Edit Profile</a>
                  
                    <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="active">
                            <a href="doctor_dash.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        
						<li>
                            <a href="Doctor_doc.php"><i class="fa fa-stethoscope" aria-hidden="true"></i> <span>Doctors</span></a>
                        </li>
                       
                        <li>
                            <a href="Doctor_pat.php"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                        </li>
                        <li>
                            <a href="Doctor_notice.php"><i class="fa fa-calendar"></i> <span>Noticeboard</span></a>
                        </li>
                        <li>
                            <a href="Doctor_app.php"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                        </li>
                        <li >
                            <a href="doctor_schedule.php"><i class="fa fa-calendar-check-o"></i> <span>Doctor Schedule</span></a>
                        </li>
                      
</ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Manage Patients</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="doctor_add_pati.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Patients</a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-bordiped custom-table datatable mb-0er table-str">
								<thead>
									<tr>
										<th>No</th>
										<th></th>
										<th>Username</th>
										<th>Age</th>
										<th>Address</th>
                                        <th>Email</th>
										
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
                              

                                 <?php 
                               
                                include 'connection.php';
                             
                               
                                $count = 1;
                                $result = mysqli_query ($conn, "select * from userpage");
                                echo 'Available user is ' .  mysqli_num_rows($result);
                                if(mysqli_num_rows($result)>0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        ?> 
									<tr>

                                        <td><?php echo $count?></td>
										<td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> </td>
										<td><?php echo $row ['Username']?></td>
										<td><?php echo $row ['Age']?></td>
										<td><?php echo $row ['Address']?></td>
										<td><?php echo $row ['Email']?></td>
                                        
										<td class="text-center">
											Active
										</td>
                                        <?php
                    $count++;
                }
            }else{
                echo '<tr>';
                echo '<td>   </td>';
                echo '<td>   </td>';
                echo '<td>   </td>';
                echo '<td>' . 'Not found'  . '</td>';
                echo '</tr>';
            }
            ?>
									</tr>
                    
								</tbody>
							</table>
						</div>
					</div>
                </div>                             
            </div>
            <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
              
                       
                    
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Tarah Shropshire</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="chat.html">See all messages</a>
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
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- patients23:19-->
</html>
