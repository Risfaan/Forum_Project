<?php
	session_start();
	if(!isset($_SESSION['admin_logged']))
	{
	
		header("location:login_first.php");
	
	}
	include("../connection/connect.php");
	
	$sq="select username,password,email,phonenumber,photo from admin where username= '".$_SESSION['admin_logged']."'";  /* where uname='uid' AND password ='pas'";*/
	$result = mysqli_query($conn,$sq);
	if($result)
	{
	$row=mysqli_fetch_row($result);
	
	$username=$row[0];
	$password=$row[1];
	$email=$row[2];
	$phonenumber=$row[3];
	$photo=$row[4]; 	
	}
	else
	{
		
	}
	

?>


<html>
	<head>
		<title>Bootstrap</title>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/flat-ui.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<?php include("style.php");?>
	</head>
<body background="images/bg1.jpg">

<?php include("admin_menu_header.php");?>
<!--
<nav class="navbar navbar-default navbar-fixed-top" id="menu_op">
	<div class="container-fluid">

		<!-- Logo --
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myBar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<img src="images/logo.png" class="img img-responsive"/>
		</div>

		<div class="collapse navbar-collapse" id="myBar">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Forum</a></li>    <!-- class="active"--
				<li><a href="profile.php">My Profile</a></li>
				<li><a href="logout.php">Log Out</a></li>
			</ul>

		</div>
	</div>
</nav>-->

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
					echo $row[0];?>" class="img-circle" alt="" height="200" width="180">
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
							Q & A </a>
						</li>-->
                        <li>
							<a class="active" href="profile_update.php">
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
		<div class="col-md-1">
            <div class="profile-content">
			   <div class="container" >
  <div class="row">
  	<div class="col-md-6">
    
          <form class="form-horizontal" enctype="multipart/form-data" action="profile_update_backend.php" method="POST">
          <fieldset>
            <div id="legend">
              <legend class="">Update</legend>
            </div>
            
            <div class="control-group">
              <label class="control-label" for="email">E-mail</label>
              <div class="controls">
                <input type="email" name="email" placeholder="" class="form-control input-lg" required  value="<?php echo $email   ?>" >
                
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Phone Number</label>
              <div class="controls">
                <input type="phonenumber"  name="phonenumber" placeholder="" class="form-control input-lg" required value="<?php echo $phonenumber   ?>" >
                
              </div>
            </div>
         
            <div class="control-group">
              <label class="control-label" for="password">Password</label>
              <div class="controls">
                <input type="password" name="password" placeholder="" class="form-control input-lg" required  value="<?php echo $password  ?>">
                
              </div>
            </div>
         
        	<div class="control-group">
              <label class="control-label">Profile Pic</label>
              <div class="controls">
                <input type="file" name="photo" accept="image/*" class="form-control input-lg">					         
                
              </div>
            </div>
         
         <br>
            <div class="control-group">
              <!-- Button -->
              <div class="controls">
                <button name="update" value="update" class="btn btn-success">Update</button>
              </div>
            </div>
          </fieldset>
        </form>
    
    </div> 
  </div>
</div>

            </div>
		</div>
        <div class="col-md-8">
        		
        </div>
	</div>
</div>




<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>