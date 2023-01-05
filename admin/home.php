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
<body bgcolor="#FF0000">


<?php include("admin_menu_header.php");?>

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar" align="center">
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
            <div class="container-fluid" id="a1"><br><br><br><br>
			  <center> <h1 >Welcome Admin ..!!</h1></center>
               
            </div>
		</div>
	</div>
    <div class="row profile">
    	<div class="col-md-3"></div>
        <div class="col-md-9">
        <?php include("../connection/connect.php");?>
        		<h5>List of Courses :</h5><br>
                	<center><h6>UG-Courses:</h6></center>
        	<div>
            	<table class="table table-respponsive">
                
                	<tr>
                        	<th>No. </th>
                            <th>Course Name </th>
                            <th>Total Students </th>
                    </tr>
                    
                            <?php include("../connection/connect.php");
						  $i=1;
						  $q1="select * from ug_courses;";
						  $result1=mysqli_query($conn,$q1);
						  if(mysqli_affected_rows($conn)>0)
						  {
						  		while($row=mysqli_fetch_assoc($result1))
								{?>
                                <tr>
									<td> <?php echo $i; $i=$i+1;?> </td>
									<td> <?php echo $row['c_name'];?></td>
                                    <td> <?php $q="select count(*) as total from users where course like '$row[c_name]' "; 
											$result=mysqli_query($conn,$q);
											$row=mysqli_fetch_assoc($result);
											echo $row['total']; ?></td>
                                 </tr>    
                                    
                                    
									<?php
								}
						  
						  }
						  else
						  {
						  	echo "No UG-Courses Available !!";
						  }
						   ?>
                
                </table>
            </div>
            		<center><h6>PG-Courses:</h6></center>
                    
            <div>
            	<table class="table table-respponsive">
                	<tr>
                        	<th>No. </th>
                            <th>Course Name</th>
                            <th>Total Students</th>
                    </tr>
                    
                            <?php include("../connection/connect.php");
						  $i=1;
						  $q1="select * from pg_courses;";
						  $result1=mysqli_query($conn,$q1);
						  if(mysqli_affected_rows($conn)>0)
						  {
						  		while($row=mysqli_fetch_assoc($result1))
								{?>
                                <tr>
									<td> <?php echo $i; $i=$i+1;?> </td>
									<td> <?php echo $row['c_name'];?></td>
                                    <td> <?php  $q="select count(*) as total from users where course like '$row[c_name]' "; 
											$result=mysqli_query($conn,$q);
											$row=mysqli_fetch_assoc($result);
											echo $row['total'];
											?></td>
                                 </tr>    
                                    
                                    
									<?php
								}
						  
						  }
						  else
						  {
						  	echo "No PG-Courses Available !!";
						  }
						   ?>
                	
                
                </table>
            </div><br><br>
            <h5>List of Students :</h5>
            <div>
            	<table class="table table-repponsive">
                	<thead>
                	<tr>
                		<th>No.</th>
                    	<th>Name.</th>
                        <th>Course</th>
                    	
                	</tr>
              		<tbody>
                    	
                    	<?php require("../connection/connect.php");
								$q="select uid,username,course from users;";
								$result=mysqli_query($conn,$q);
					
								//$row=mysql_fetch_array($result);
								$i=0;
								if(mysqli_num_rows($result)>0)
								{
									
										while($row = mysqli_fetch_assoc($result)) 
										{
											$i=$i+1;
        									?>
                                            <tr>
                                            	<td><?php echo $i ?></td>
                                                <td><?php  echo $row['username'];?></td>
                                                <td><?php echo $row['course'];?></td>
                                                
                                             </tr><?php
   									    }
								
								}
								
								
						
						
						 ?>
                    
                    </tbody>
                </thead>
              
                	
                
                </table>
            </div>
        <div><br><br>
        	<h5>List of Questions :</h5>
              
              <table class="table">
              	<thead>
                	<tr>
                		<th>No.</th>
                    	<th>Question.</th>
                        <th>Course </th>
                        <th>Semester</th>
                        <th>Check Replies</th>
                    	
                	</tr>
              		<tbody>
                    	
                    	<?php
								require("../connection/connect.php");
								$q="select q_id,qname,course,sem from question;";
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
        									?><tr><td><?php echo $i ?></td>
                                            <td><?php  echo $row['qname'];?></td>
                                            <td><?php echo $row['course'];?></td>
                                            <td><?php echo $row['sem'];?></td>
                                            <td><a href="q_reply_admin.php?id=<?php echo $row['q_id']; ?>"><span style="color:green" class="fui-new">  </span> </a></td>
                                </tr><?php
   									    }
								
								}
								else
								{
									?><tr><td></td><td> No Question Availabe </td></tr><?php
								}
								
								
								
						
						
						 ?>
                    
                    </tbody>
                </thead>
              
              
              
              </table>  
                
 
        </div>   
       
        </div>
        </div>
        
    </div>
</div>






<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>