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
		<?php include("style.php");?>
	</head>
<body background="images/bg1.jpg">
<?php include("admin_menu_header.php");?>
<!--
<nav class="navbar navbar-default navbar-fixed-top" id="menu_op">
	<div class="container-fluid">

		<!-- Logo -=->
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

<div class="container">
    <div class="row profile" align="center">
		<div class="col-md-12">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
				
				
				<img src="<?php include("../connection/connect.php");
					$qry = "select photo from admin where username='$_SESSION[admin_logged]'";
					$ex_qry = mysqli_query($conn, $qry);
					$row = mysqli_fetch_array($ex_qry);
					echo $row[0];?>" class="img-circle"  height="200" width="180">
				</div>
               </div>
               </div>
               <div class="row profile" align="left">
               	<div class="col-md-4">
                </div>
                <div class="col-md-4">
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
                    <table class="table">
                    	<tr>
                        	
							<th>  Name :</th><td> <?php echo strtoupper($_SESSION['admin_logged']);  ?></td>
                        </tr>
                        <tr>
                        
                        	<th>  Occupation :</th><td> Admin</td>
                        </tr>
                        <tr>
                        	<th>Under-Graduate Courses : </th><td><?php include("../connection/connect.php");
						  
						  $q1="select * from ug_courses;";
						  $result1=mysqli_query($conn,$q1);
						  if(mysqli_affected_rows($conn)>0)
						  {
						  		while($row=mysqli_fetch_assoc($result1))
								{
									echo $row['c_name'];?> , <?php
								}
						  
						  }
						  else
						  {
						  	echo "No UG-Courses Available !!";
						  }
						   ?></td></tr>
                           <tr>
						   
                          		<th>Post-Graduate Courses : </th><td><?php include("../connection/connect.php");
						  
						  $q1="select * from pg_courses;";
						  $result1=mysqli_query($conn,$q1);
						  if(mysqli_affected_rows($conn)>0)
						  {
						  		while($row=mysqli_fetch_assoc($result1))
								{
									echo $row['c_name'];?> , <?php
								}
						  
						  }
						  else
						  {
						  	echo "No PG-Courses Available !!";
						  }
						  
						  
						  
						  ?></td></tr>
                          <tr>
                          	<th>Total Students : </th>
                            <td><?php $q2="select count(*) as total from users ;"; 
                            	$result2=mysqli_query($conn,$q2);
								if(mysqli_affected_rows($conn)>0)
								{
									$row=mysqli_fetch_assoc($result2);
									echo $row['total'];
								}
								
                            
                            ?></td></tr>
                            <tr>
                          	<th>Total Questions : </th>
                            <td><?php $q2="select count(*) as total from question ;"; 
                            	$result2=mysqli_query($conn,$q2);
								if(mysqli_affected_rows($conn)>0)
								{
									$row=mysqli_fetch_assoc($result2);
									echo $row['total'];
								}
								
                            
                            ?></td></tr>
                          
                          
                          
                          </table>
                          <br>
					</div>
                    </div>
                    <div class="col-md-4">
                    </div>
				
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR MENU -->
                <br>
                </div>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-9">
                
                <div>
                <table class="table">
                	<thead>
                    	<th>NO.</th>
                        <th>Suggestion.</th>
                        <th>Suggestioner</th>
                        <th>Delete</th>     
                    </thead>
                    <tbody>
                    	<?php include("../connection/connect.php");
									$q="select * from reviews; ";
									$result=mysqli_query($conn,$q); 
									if(mysqli_affected_rows($conn)>0)
									{$i=0;
										while($row=mysqli_fetch_assoc($result))
										{$i=$i+1;?>
                                        	<tr>
                                                <td><?php echo $i ?></td>
                                                <td><?php echo $row['rev'];?></td>
                                                <td><?php echo $row['r_giver']; ?></td>
                                                <td><a href="review_backend.php?id=<?php echo $row['r_id']; ?>">Delete</a></td>
											</tr>										<?php
										}
									}
									else
									{
											?><tr>
                                            <td></td><td>No Suggestions Received</td><?php
									}
									?> </td>
                    </tbody>
                
                
                </table>
               
                
                </div>
                
                <div class="col-md-2">
                </div>
                
                <br><br><br><br>
                
				<center><a href="home.php">Go to Home</a></center>
				<!-- END MENU --></div>
			</div>
		</div>
		<!--<div class="col-md-9">
            <div class="profile-content">
			   <h1>Welcome to Your Profile .
            </div>
		</div>-->
	</div>
</div>







<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>