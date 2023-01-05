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
			   <h4>Remove Course Name </h4></center>
						<br>
                        <br>
                        <form name="f2" action="remove_course_backend.php" method="post">
       		
              
            <label for="course">Selected Program :</label>
            <br />
            <div class="control-group">
             <select name ="program1"class="form-control" id="sel1" style="width:200px" >
   			<?php
			 if($_POST['program']=='Under-Graduate') 
			
			{?>
				<option>Under-Graduate</option>
			<?php
            }
			else
			{
            	?><option>Post-Graduate</option>
            <?php 
			}?>
      </select>
      
		<br>
        <font color="#FF0000" ><small> Notice : The Course which u Select will be Removed Including the Semesters it Contans !!<small></font>
              <br><label for="course">Select Course :</label>
              
      	<select name="course" class="form-control" style="width:200px">
                	<?php if($_POST['program']=='Under-Graduate')
							{
								include("../connection/connect.php");
								$q="select * from ug_courses ;";
								$result=mysqli_query($conn,$q);
								//$rows=mysqli_fetch_assoc($result);
								while($row=mysqli_fetch_assoc($result))
								{
								?><option><?php echo $row['c_name'];?></option><?php  
								}
								
							}
							else
							{
								include("../connection/connect.php");
								$q="select * from pg_courses ";
								$result=mysqli_query($conn,$q);
								while($rows=mysqli_fetch_assoc($result))
								{
									?><option><?php echo $rows['c_name'];?></option><?php
								}								
							}
                	?></select>
              
              <!-- Button -->
              <br>
              <div class="controls">
                <button class="btn btn-success" name="add" value="add" >Remove</button>
              </div>
              
            </div>
       
    </form>
              </div></div>





<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-dropdownhover.min.js"></script>
</body>
</html>