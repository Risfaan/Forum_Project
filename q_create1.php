<?php
	session_start();
	if(!isset($_SESSION['user_logged']))
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
		<?php include("style.php");?>
	</head>
<body background="images/bg1.jpg">

		<?php include("menu_header_logged.php");?>
        
<!--<nav class="navbar navbar-default navbar-fixed-top" id="menu_op">
	<div class="container-fluid">

		<!-- Logo -
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
				<li><a href="#">Forum</a></li>    <!-- class="active"-=->
				<li><a href="profile.php">My Profile</a></li>
				<li><a href="logout.php">Log Out</a></li>
			</ul>

		</div>
	</div>
</nav>-->
<br>
<br>
<br>
<br>

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
				
				
				<img src="<?php include("connection/connect.php");
					$qry = "select photo,course,sem from users where username='$_SESSION[user_logged]'";
					$ex_qry = mysqli_query($conn, $qry);
					$row = mysqli_fetch_array($ex_qry);
					echo $row[0]; $c=$row[1]; $s=$row[2];?>" class="img-circle"  height="200" width="180">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						&nbsp;&nbsp;&nbsp;&nbsp;<small><?php echo strtoupper($_SESSION['user_logged']);  ?></small>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="home.php">
							<!--<span class="glyphicon glyphicon-home"></span>-->
							Home </a>
						</li>
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
            <div class="profile-content">
			   <center><h1>Forum </h1></center>
               <h4>Ask a Question</h4><br />
               
               <form name="f1" method="post" action="q_create_backend.php" >
               
             
              <label class="control-label" for="password"><h6>You Selected Subject : <?php echo $_POST["subject"]; ?></h6></label>
              <input type="text" value="<?php echo $_POST["subject"]; ?>" name="subject" hidden />
             
             
             

		</div>                
                  
                       <div class="form-group">
              <label for="sel1">Select any Topic Related to Your Question:</label>
              <select class="form-control" id="sel1" style="width:200" name="topic">
              	
              
 
  
             
             	<?php
			  $tab= $_POST["subject"];
			  
			  $q="select name from topic where subject like '$tab'";
			  $ex_qry = mysqli_query($conn,$q);
			while($rows1 = mysqli_fetch_assoc($ex_qry))
			{
			  
			  
			  ?>
                <option value="<?php echo $rows1['name']; ?>"><?php echo $rows1['name']; ?></option>
				
				<?php
				
				}
			?>
                  <option value="other"> Other</option>
  			</select>			
		</div>                
              

             
             
             
         <br>
               
               <div class="form-group">
  					<label for="comment">Ask your Question :</label>
  					<textarea class="form-control" rows="5" id="comment" name="question" required ></textarea>
				</div>
               
               <div class="control-group">
              <!-- Button -->
              <div class="controls">
                <button class="btn btn-success" name="submit" value="submit">Submit</button>
              </div>
            </div>
               </form>
               
               
               </div>
            </div>
		</div>
	</div>
</div>



<script src="js/jquery.js"> </script>
<script src="js/bootstrap.min.js"> </script>
</body>
</html>