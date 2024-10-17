<?php
ob_start();
session_start(); 
include('connect.php');
$err_msg=$suces_msg="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$sname=mysql_real_escape_string($_POST['sname']);
$rollno=mysql_real_escape_string($_POST['rollno']);
$graduate=mysql_real_escape_string($_POST['graduate']);
$department=mysql_real_escape_string($_POST['department']);
$year=mysql_real_escape_string($_POST['year']);
$address=mysql_real_escape_string($_POST['address']);
$block=mysql_real_escape_string($_POST['block']);
$roomno=mysql_real_escape_string($_POST['roomno']);
$mobile=mysql_real_escape_string($_POST['mobile']);
			
									
									 $result = mysql_query("SELECT max(sno)as max FROM student");
									 $row = mysql_fetch_array($result);
									 $id=$row['max']+1;
											
											if($_FILES["file"]["name"]<>"")
											{								
												$filename=$id;				
												$allowedExts = array("jpg","png","bmp","gif","jpeg","pdf");
												$temp = explode(".", $_FILES["file"]["name"]);
												$extension = end($temp);
												if (in_array($extension, $allowedExts))
												{
												move_uploaded_file($_FILES["file"]["tmp_name"],"image/$filename.$extension" );
												}
												$path="image/$filename.$extension";		 
											}

mysql_query ("insert into student(sno,sname,rollno,graduate,department,year,address,block,roomno,mobile,path) values ($id,'$sname','$rollno','$graduate','$department','$year','$address','$block','$roomno','$mobile','$path')");


$suces_msg="done";


}
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

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-3.jpg">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.php" class="simple-text">
                    Visitor Management
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
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


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Student Information</h4>
                            </div>
                            <?php 
			if($suces_msg=="done")
			{
			echo"<br/><table style='border:solid 3px #009900;border-radius:5px;' align='center' width='40%'>
			<tr><td  align='center' height='25px' style='text-decoration:none; color:#009900; font-size:14px'> Student Added successfully.</td></tr>
			</table><br/>";
			}
			
			if (!$err_msg=="")	
			{
			echo"<br/><table style='border:solid 3px #FF0000;border-radius:5px;' align='center' width='40%'>
			<tr><td  align='center' height='25px' style='text-decoration:none; color:#FF0000; font-size:14px'> &nbsp;&nbsp;
			$err_msg</td></tr>
			</table><br/>";
			}
				
			?>
                            <div class="content">
                                <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Full Name" name="sname">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Roll No.</label>
                                                <input type="text" class="form-control" placeholder="Roll Number" name="rollno">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Graduate</label>
                                                <input type="text" class="form-control" placeholder="Graduate" name="graduate">
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Department</label>
                                                <select class="form-control" name="department" required>
                                                	<option value="">Select</option>
                                                    <option value="B.Sc-Computer Science">B.Sc-Computer Science</option>
                                                    <option value="B.Sc-Information Technology">B.Sc-Information Technology</option>
                                                    <option value="B.Sc-Mathematics">B.Sc-Mathematics</option>
                                                    <option value="B.Sc-English">B.Sc-English</option>
                                                    <option value="B.Sc-Tamil">B.Sc-Tamil</option>
                                                    <option value="B.Sc-CT">B.Sc.CT</option>
                                                    <option value="BCA">BCA</option>
                                                    <option value="MCA">MCA</option>
                                                    <option value="MA-Tamil">MA-Tamil</option>
                                                    <option value="M.Sc-Zoology">M.Sc-Zoology</option>
                                                    <option value="M.Com-Commerce">M.Com-Commerce</option>
                                                    <option value="M.SC-Maths">M.Sc-Maths</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Year</label>
                                                <select class="form-control" required name="year">
                                                	<option value="">Select</option>
                                                    <option value="First">First</option>
                                                    <option value="Second">Second</option>
                                                    <option value="Final">Final</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Home Address" name="address">
                                            </div>
                                        </div>
                                    </div>
									
                                   <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Block</label>
                                                <select class="form-control" name="block" required>
                                                	<option value="">Select</option>
                                                    <option value="A-Block">A-Block</option>
                                                    <option value="B-Block">B-Block</option>
                                                 </select>
                                                </div>
                                            </div>
                                        </div>
                                 
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Room No.</label>
                                                <input type="text" class="form-control" placeholder="Room Number" name="roomno">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mobile</label>
                                                <input type="text" class="form-control" placeholder="Mobile Number" name="mobile">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Photo</label>
                                                <input type="file" class="form-control" name="file">
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>
                                    <div class="clearfix"></div>
                                </form>
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
