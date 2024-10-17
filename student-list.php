<?php
ob_start();
session_start(); 
include('connect.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Visitor Management</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<script type="text/javascript" src="http://gc.kis.scr.kaspersky-labs.com/C9BBDAC0-8745-2F44-989F-F28B5962977F/main.js" charset="UTF-8"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.php" class="simple-text">
                    Visitor Management
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="add-student.php">
                        <i class="pe-7s-user"></i>
                        <p>Add Student</p>
                    </a>
                </li>
                <li>
                    <a href="add-relation.php">
                        <i class="pe-7s-user"></i>
                        <p>Add Relation</p>
                    </a>
                </li>
                <li>
                    <a href="visitor-registration.php">
                        <i class="pe-7s-user"></i>
                        <p>Visitor Registration</p>
                    </a>
                </li>
               <li>
                    <a href="compare.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Details Compare</p>
                    </a>
                </li>
                <li>
                    <a href="photo-compare.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Photo Compare</p>
                    </a>
                </li>
                 <li>
                    <a href="visitor-check-in.php">
                        <i class="pe-7s-graph"></i>
                        <p>Visitor Check In</p>
                    </a>
                </li>
                <li>
                    <a href="visitor-check-out.php">
                        <i class="pe-7s-graph"></i>
                        <p>Visitor Check Out</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Reports
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="student-list.php">Student List</a></li>
                                <li><a href="relation-list.php">Relation List</a></li>
                                <li><a href="visitor-list.php">Visitor List</a></li>
                                <li><a href="visitor-in-out.php">Visitor Check In/Out</a></li>
                              </ul>
                        </li>
                        </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>
								<?php
								error_reporting(E_ERROR | E_PARSE);
require_once "connect.php";
$query = "select * from student";
$data = mysql_query($query);
									
								?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Student List</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                           
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Photo</th>
                                    	<th>Name</th>
                                    	<th>Roll No</th>
                                     <th>Graduate</th>
                                    	<th>Department</th>
                                     <th>Year</th>
                                     <th>Address</th>
                                        <th>Block</th>
                                        <th>Room No</th>
                                        <th>Mobile</th>
                                    </thead>
                                     <?php while($rec = mysql_fetch_array($data)) { ?>
                                    <tbody>
                                        <tr>
                                        	<td><?php echo $rec['sno']; ?></td>
                                        	<td><img src="<?php echo $rec['path'];?>" width="100" height="100"></td>
                                        	<td><?php echo $rec['sname']; ?></td>
                                            <td><?php echo $rec['rollno']; ?></td>
                                            <td><?php echo $rec['Graduate']; ?></td>
                                            <td><?php echo $rec['department']; ?></td>
                                            <td><?php echo $rec['year']; ?></td>
                                            <td><?php echo $rec['address']; ?></td>
                                            <td><?php echo $rec['block']; ?></td>
                                            <td><?php echo $rec['roomno']; ?></td>
                                            <td><?php echo $rec['mobile']; ?></td>
                                        </tr>
                                        
                                    </tbody>
                                    <?php } ?>
                                </table>
                                
                            </div>
                        </div>
                    </div>


                    

                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> 
                </p>
            </div>
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
