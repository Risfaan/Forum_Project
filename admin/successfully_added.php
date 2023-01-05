<?php
	session_start();
	if(!isset($_SESSION['admin_logged']))
	{
	
		header("location:login_first.php");
	
	}
?>


<html>
	<head>
		<title>Bootstrap</title>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/flat-ui.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link href="css/animate.min.css" rel="stylesheet">
    	<link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">
		<?php include("style.php");?>
	</head>
<body background="images/bg1.jpg">


<?php include("admin_menu_header.php");?>

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
				
				
				<img src="<?php include("../connection/connect.php");
					$qry = "select photo from admin where username='$_SESSION[admin_logged]'";
					$ex_qry = mysqli_query($conn, $qry);
					$row = mysqli_fetch_array($ex_qry);
					echo $row[0];?>" class="img-circle"  height="200" width="180">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						&nbsp;&nbsp;&nbsp;&nbsp;<small><?php echo strtoupper($_SESSION['admin_logged']);  ?></small>
					</div>
				</div>
                
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<!--<li class="active">
							<a href="">
							<!--<span class="glyphicon glyphicon-home"></span>-/->
							</a>
						</li>-->
                        <li>
							<a href="profile_update.php">
							<!--<span class="glyphicon glyphicon-user"></span>-->
							Update Profile </a>
						</li>
						<li>
							<a href="logout.php">
							<!--<span class="glyphicon glyphicon-user"></span>-->
							Log Out </a>
						</li>
						
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
        
        <center><font color="#00FF00"><h4>Topic Successfully Added</h4></font></center>
            <div class="profile-content">
			   <center><h4>Admin Rights Related To..</h4></center>
						<br />
                        <br>
                   
                   		
           <table class="table">
           	<tbody>
           		<tr align="center"> 
                <td>            
  <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" style="width:150px">
   Admin  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="register.php">Create Admin</a></li>
    <li><a href="remove_admin.php">Remove Admin</a></li>
  </ul>
  </div>
  				</td>
                <td>
  
  <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" style="width:150px">
   Students <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="remove_student.php">Remove Student</a></li>
  </ul>
  </div>
  				</td>
  				</tr>
				<tr  align="center">
                <td>
	    <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" style="width:150px">
   Questions  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="remove_question.php">Remove Question</a></li>
  </ul>
  </div>
  				</td>
                <td>
  <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" style="width:150px">
   Course <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="add_course.php">Add Courses</a></li>
    <li><a href="remove_course.php">Remove Course</a></li>
  </ul>
  </div>
  				</td>
                </tr>
                <tr align="center">
                <td>
  
  <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" style="width:150px">
   Semester <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="add_sem.php">Add Semester</a></li>
    <li><a href="remove_sem.php">Remove Semester</a></li>
  </ul>
  </div>
  				</td>
                <td>
  
  <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" style="width:150px">
   Subjects <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="add_sub.php">Add Subject</a></li>
    <li><a href="remove_sub.php">Remove Subject</a></li>
  </ul>
  </div>


				</td>
                </tr>
                <tr align="center">
                <td>
  
  <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" style="width:150px">
   Topics <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="add_topic.php">Add Topic</a></li>
    <li><a href="remove_topic.php">Remove Topic</a></li>
  </ul>
  </div>


				</td>
                <td>
                </td>
                </tr>
                
                
</tbody>
  </table> 
                        
                        
                        
                        
                        
                   </ul> 
            </div>
		</div>
	</div>
</div>






<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-dropdownhover.min.js"></script>
</body>
</html>