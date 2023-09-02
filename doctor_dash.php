
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



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Shield-Care Hospital</title>
   
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
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
                        <span class="user-img">
							<img class="rounded-circle" src="assets/img/user.jpg" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="adminprofile.php">My Profile</a>
                    <a class="dropdown-item" href="adminupdate.php?id=<?php echo $row['id']?>">Edit Profile</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="active" style ="display:flex">
                        <span class="user-img">
							<img class="rounded-circle" src="assets/img/user.jpg" width="24" style ="margin-left:20px">
							<span class="status online"></span>
                           
						</span>
                        <h4 style ="margin-left:5px">Hi <?php echo  $Adminname ?></h4>

                        </li>
                       
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
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class=" mt-4 " >
						
                            
							
								<h3 class="text-info">Doctor Dashboard </h3>
								
							</div>
                       
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget shadow">
							<span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
                            <?php
                                $result1 = mysqli_query ($conn, "select * from adminpage");
                                ?>
							<div class="dash-widget-info text-right ">
								<h3 > <?php echo  (mysqli_num_rows($result1))?></h3>
								<span class="widget-title1">Doctors <i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                        </div>
                    </div>
                   <?php
                                $result = mysqli_query ($conn, "select * from Userpage");
                                ?>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget shadow">
                            <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3 style=""> <?php echo  (mysqli_num_rows($result))?></h3>
                                <span class="widget-title2">Patients <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                 
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget shadow">
                            <span class="dash-widget-bg4"><i class="fa fa-calendar"></i></span>
                            <div class="dash-widget-info text-right">
                            <?php $result = mysqli_query ($conn, "select * from appointment");
                                ?>
                                  <h3 style=""><?php echo  (mysqli_num_rows($result))?></h3>
                                <span class="widget-title4">Bookings <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="row">
                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
						<div class="card">
							<div class="card-body">
								<div class="chart-title">
                                <img src="images/slider/doctor-s-hand-holding-stethoscope-closeup.jpg" class="img-fluid" alt="">
								</div>	
							
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-6 col-xl-6">
						<div class="card">
							<div class="card-body">
								<div class="chart-title">
								<img src="images/gallery/medium-shot-man-getting-vaccine.jpg" class="img-fluid galleryImage" alt="get a vaccine" title="get a vaccine for yourself">
</div>
</div>
                                <div class="float-right">
										<ul class="chat-user-total">
											
										</ul>
									</div>
								</div>	
								
							</div>
						</div>
                        <div class="row">
					<div class="col-12 col-md-6 col-lg-8 col-xl-8">
						<div class="card">
							<div class="card-header ">
								<h4 class="card-title d-inline-block">Upcoming Appointments</h4> <a href="Doctor_app.php" class="btn btn-primary float-right">View all</a>
							</div>
							<div class="card-body p-0">
                            <div class="col-md-12">
                            <div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
										<thead >
											<tr>
												<th></th>
												<th></th>
												<th>Name</th>
												
												<th>Date</th>
												<th>Timing</th>
                                                <th>message</th>
												<th class="text-right">Status</th>
                                                
											</tr>
										</thead>
										<tbody>
                                        <?php 
                               
                               include 'connection.php';
                            
                              
                               $count = 1;
                               $id=$_SESSION['doctorid'];
                               $result = mysqli_query ($conn, "select * from appointment where Adminname = '$id'");
                               echo ' New Appointment is ' .  mysqli_num_rows($result);
                               if(mysqli_num_rows($result)>0){
                                   while($row = mysqli_fetch_assoc($result)){
                                       ?> 
                                   <tr>

                                       <td><?php echo $count?></td>
                                       <th>	<a class="avatar" href="">B</a> </th>
                                       <td><?php echo $row ['Age']?></td>
                                    
                                      
                                       <td><?php echo $row ['AppointmentDate']?></td>
                                       <td><?php echo $row ['AppointmentTime']?></td>
                                       <td><?php echo $row ['messages']?></td>
                                      <td> <?php 
                                       if($row ['status']==1){
                                           echo '<p> <a href="activestaff.php?id='.$row['id'].'&status=0" class = "btn btn-danger">Reject
                                           </a></p>';
                                       }else{
                                           echo '<p> <a href="activestaff.php?id='.$row['id'].'&status=1" class = "btn btn-info">Accept
                                           </a></p>';
                                       }
                                       ?>
                                       </td>
                                       <td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													
													<a class="dropdown-item"  href="='<?php echo $row['id']?>'"  data-toggle="modal" data-target="">
                                                    <i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
                                        <?php
                    $count++;
                }
            }else{
                echo '<tr>';
                echo '<td>   </td>';
                echo '<td>   </td>';
                echo '<td>   </td>';
                echo '<td class= "text-danger">' . 'Not found'  . '</td>';
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
        </div>
          

                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="card member-panel">
							<div class="card-header bg-success">
								<h4 class="card-title mb-0 ">Doctors</h4>
							</div>
                            <div class="card-body">
                                <ul class="contact-list">
                                <?php 
                               
                               include 'connection.php';
                            
                              
                               $count = 1;
                               $result = mysqli_query ($conn, "select * from adminpage");
                               echo 'Available Doctor is ' .  mysqli_num_rows($result);
                               if(mysqli_num_rows($result)>0){
                                   while($row = mysqli_fetch_assoc($result)){
                                      ?> 
                                    <li>
                                        <div class="contact-cont">
                                            <div class="">
                                              <a class="avatar" href="">D</a> <span class="status online"></span>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis"><?php echo $row ['Adminname']?></span>
                                                <span class="contact-date"><?php echo $row ['department']?></span>
                                            </div>
                                        </div>
                                        <?php
                    $count++;
                }
            }else{
              
                echo '<span class= "text-danger">' . ' Not found'  . '</span>';
           
            }
            ?>
                                    </li>
                                    <li>
                            </ul>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-8 col-xl-8">
						<div class="card">
							<div class="card-header ">
								<h4 class="card-title d-inline-block">New Patient</h4> <a href="Doctor_pat.php" class="btn btn-primary float-right">View all</a>
							</div>
							<div class="card-body p-0">
								<div class="table-responsive">
									<table class="table mb-0">
										<thead class="">
											<tr>
                                                <th></th>
                                                <th></th>
                                                <th>Name</th>
												<th>Age</th>
												<th>Address</th>
                                                <th>mail</th>


												<th class="text-right">Status</th>
											</tr>
										</thead>
										<tbody>
                                        <?php 
                               
                               include 'connection.php';
                            
                              
                               $count = 1;
                               $result = mysqli_query ($conn, "select * from userpage");
                               echo ' New Appointment is ' .  mysqli_num_rows($result);
                               if(mysqli_num_rows($result)>0){
                                   while($row = mysqli_fetch_assoc($result)){
                                       ?> 
                                   <tr>

                                       <td><?php echo $count?></td>
                                       <th>	<a class="avatar" href="">P</a> </th>
                                       <td><?php echo $row ['Username']?></td>
										<td><?php echo $row ['Age']?></td>
										<td><?php echo $row ['Address']?></td>
										<td><?php echo $row ['Email']?></td>
                                     
                                        <td class="text-right">
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
                echo '<td class= "text-danger">' . 'Not found'  . '</td>';
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
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="card member-panel">
							<div class="card-header bg-warning">
								<h4 class="card-title mb-0">Notification Board are main for <span class="text-danger">48hr</span></h4>
							</div>
                            <div class="card-body ">
                                <ul class="contact-list">
                                <?php 
                               
                               include 'connection.php';
                            
                              
                               $count = 1;
                               $result = mysqli_query ($conn, "select * from notificationboard");
                               echo 'New notification ' .  mysqli_num_rows($result);
                               if(mysqli_num_rows($result)>0){
                                   while($row = mysqli_fetch_assoc($result)){
                                      ?> 
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="profile.html" title="John Doe"><a class="avatar" href="">N</a> <span class="text-info"><?php echo $count?></span></a>
                                            </div>
                                            <div class="contact-info ">
                                                <span class="row">
                                                <span class="contact-name  "><?php echo $row ['notification']?></span>
                                                
                                                <br>
                                                <br>
                                                <span class="contact-date ">By: <?php echo $row ['messagefrom']?></span>
                                                </span>
                                               
                                                <span class="contact-date text-info">Time: <?php echo $row ['Date']?></span>
                                              
                                                
                                               
                                   </span>
                                            </div>
                                        </div>
                                        <?php
                    $count++;
                }
            }else{
              
                echo '<span class= "text-danger">' . ' Not found'  . '</span>';
           
            }
            ?>
                                    </li>
                                    <li>
                            </ul>
                                    </div>
                                    </div>
                                    </div>
				
								</div>	
								
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
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/app.js"></script>

</body>



</html>