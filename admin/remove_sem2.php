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
                        <!--<form name="f2" action="remove_sem_backend.php" method="post">
       	<div class="control-group">
                       		<label class="control-label" for="username">Selected Semester :</label>
        <div class="controls">
                <input type="text" name="course" class="form-control input-lg"style = "width:300px" value="<?php echo $_POST['course'];?>" readonly >		
        </div>-->
        
        <h1>List of Semesters :</h1>
              
              <table class="table">
              	<thead>
                	<tr>
                		<th>No.</th>
                    	<th>Semester Name.</th>
                    	<th>Operation</th>
                	</tr>
              		<tbody>
                    	
                    	<?php	$c=$_POST['course'];
								require("../connection/connect.php");
								$q="select s_id,sem from $c;";
								$result=mysqli_query($conn,$q);
								if (!$result) 
								{
 								   die(mysqli_error($conn));
								}
								//$row=mysql_fetch_array($result);
								$i=0;
								if(mysqli_affected_rows($conn)>0)
								{
									
										while($row = mysqli_fetch_assoc($result)) 
										{
											$i=$i+1;
        									?><tr><td><?php echo $i ?></td><td><?php  echo $row['sem'];?></td><td><a href="remove_sem_backend.php?id=<?php echo $row['s_id'];?>&c_id=<?php echo $_POST['course']; ?>&sem=<?php echo $row['sem']; ?>"><span style="color:red" class="fui-cross">  </span>  </a></td></tr><?php
   									    }
								
								}
								else
								{
									?><tr><td></td><td> No Sem Availabe </td></tr><?php
								}
								
								
								
						
						
						 ?>
                    
                    </tbody>
                </thead>
              
              
              
              </table>  
                
 
        </div>   
       
   						
              </div></div>





<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-dropdownhover.min.js"></script>
</body>
</html>