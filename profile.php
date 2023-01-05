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
<body>
<?php include("menu_header_logged.php");?>
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
<br>
<br>
<br>
<div class="container">
    <div class="row profile" align="center">
		<div class="col-md-12">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
				
				
				<img src="<?php include("connection/connect.php");
					$qry = "select photo,course,sem from users where username='$_SESSION[user_logged]'";
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
						  Name : <?php echo $_SESSION['user_logged'];  ?><br>
                          Course : <?php echo $row[1];?><br>
                          Semester : <?php echo $row[2];?><br>
                          Total Question Asked : <?php include("connection/connect.php"); 
						  $us=$_SESSION['user_logged'];
						  $q=("select count(*) as total from question where q_creater like '$us';");
						  $result=mysqli_query($conn,$q);
						  if($result)
						  {
						  	$row=mysqli_fetch_assoc($result);
						  	echo $row['total'];
						  }
						  else
						  {
						  	
						  	echo "0";
						  
						  }
						 /* try 
						  {
						  $row=mysqli_fetch_assoc($result))
						  }
						  catch
						  {
						  	echo $row['total'];
						  }*/
						  
						  
						  
						  ?><br>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR MENU -->
                <br>
                </div>
              
                <div class="col-lg-12">
                <div class="profile-content">
                <center>Your Questions</center><br>
               <div class="table-responsivem">
               <table class="table table-inverse">
               		<tbody>
                    <thead>
                      <tr>
                        <th>Q.no </th>
                        <th>Question Subject</th>
                        <th>Check Replies</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    
               <?php
			   		$u=$_SESSION['user_logged'];
			   		include("connection/connect.php");
			   		$q="select username,sem,course from users where username = '$u'";
					$result=mysqli_query($conn,$q);
					$row=mysqli_fetch_assoc($result);
					$sem=$row['sem'];
					$course=$row['course'];
			   		
					$q1="select q_id,subject,q_creater from question where q_creater like '$u';";
					$result1=mysqli_query($conn,$q1);
					if(mysqli_affected_rows($conn)>0)
					{	$i=0;
						while($rows=mysqli_fetch_assoc($result1))
						{$i=$i+1;?>
							<tr>
                            	<td><?php echo $i ?></a></td>
                                <td><?php echo $rows['subject']?></a></td>
                                <td><a href="q_reply_admin.php?id=<?php echo $rows['q_id']; ?>"><span style="color:green" class="fui-new">  </span></a>
                                <td><a href="remove_question_backend.php?id=<?php echo $rows['q_id']; ?>"><span style="color:red" class="fui-cross">  </span></a></td></td>
                            </tr><?php
						}
					
					
					}
					else
					{?>
							<tr><td></td>
                            	<td>Sorry,No Questions asked by u</td>
                                <td></td>
                            </tr><?php
					}
			   
			   
			   ?>
               </tbody>
               </table>
               
               
               </div> 
         <div>       <br><br>
                <form name="review" action="review_backend.php" method="post">
                	
                
  					<label for="comment">Give Your Valuable Suggestion :</label>
  				<div class="form-group">
                	<textarea class="form-control" rows="5" id="comment" name="suggestion" ></textarea>
				</div>
                    
            <div class="control-group">
              <!-- Button -->
              <div class="controls">
                <button class="btn btn-success" name="submit" value="submit">Submit</button>
              </div>
            </div>
                    
                </form>
                
                
                
				<center><a href="home.php">Go to Home</a></center>
                
                
				<!-- END MENU -->
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