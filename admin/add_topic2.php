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
			<div class="profile-content">
			   <h4>Post-Graduate Course Name </h4></center>
						<br>
                        <br>
       <form name="f1" action="add_topic3.php" method="post">
       		<div class="control-group">
                       		<label class="control-label" for="username">Semester Name :</label>
              				<div class="controls">
                <input type="text" name="c" class="form-control input-lg"  style="width:300" value=<?php echo $_POST['semi'];?> readonly >
              </div>
              
       <label for="sel1">Select Subject :</label>
              
                <select name="sub" class="form-control" style="width:200px">
                	<?php		
							    include("../connection/connect.php");
						
								$sub=$_POST["c"]."_".$_POST["semi"];
								echo $sub;
								$q="select * from $sub";
								$result=mysqli_query($conn,$q);
								//$rows=mysqli_fetch_assoc($result);
								while($rows=mysqli_fetch_assoc($result))
								{
								?><option><?php echo $rows['sub'];?></option><?php 
								}?>
                                
                                <!--<span class="badge">12</span></li>-->
 					 
				</select>
                
				
              		<!--
			  <label class="control-label" for="username">Enter Total No of Subjects :</label>
              <div class="controls">
                <input type="number" min="1" id="no" name="no" placeholder="" class="form-control input-lg"  style="width:300" required >
              </div>
				
				-->
                
                
                
                <!--<div class="radio">
                    <label><input type="radio" name="c" value="BCA">BCA</label>
                </div>
                <div class="radio">
              		<label><input type="radio" name="c" value="MCA">MCA</label>
              	</div>-->
             
              
            <br />
            <div class="control-group">
              <!-- Button -->
              <div class="controls">
                <button class="btn btn-success" name="add" value="add" onClick="add_sem_backend.php" >Next</button>
              </div>
            </div>
       
    </form>
                    
            </div>
		</div>
	</div>
</div>





<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-dropdownhover.min.js"></script>
</body>
</html>