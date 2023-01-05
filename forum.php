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
		<div class="col-lg-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
				
				
				<img src="<?php include("connection/connect.php");
					$qry = "select photo from users where username='$_SESSION[user_logged]'";
					$ex_qry = mysqli_query($conn, $qry);
					$row = mysqli_fetch_array($ex_qry);
					echo $row[0];?>" class="img-circle"  height="200" width="180">
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
		<div class="col-lg-9">
            <div class="profile-content">
			   <center><h1><u>Forum </u></h1></center>
               <h4><a href="q_create.php">Ask a Question</a></h4><br />
               
               Reply to Question: 
               
               <center>Questions</center>
               <div class="table-responsiv">
               <table class="table table-inverse">
               		<tbody>
                    <thead>
                      <tr>
                        <th>Q.no </th>
                        <th>Question Subject</th>
                        <th>Reply</th>
                        <th>Questioner</th>
                      </tr>
                    </thead>
                    
               <?php
			   		$u=$_SESSION['user_logged'];
			   		include("connection/connect.php");
			   		$q="select sem,course from users where username = '$u'";
					$result=mysqli_query($conn,$q);
					$row=mysqli_fetch_assoc($result);
					$sem=$row['sem'];
					$course=$row['course'];
			   		
					$q1="select q_id,subject,q_creater from question where sem like '$sem' and course like '$course';";
					$result1=mysqli_query($conn,$q1);
					if(mysqli_affected_rows($conn)>0)
					{	$i=0;
						while($rows=mysqli_fetch_assoc($result1))
						{$i=$i+1;?>
							<tr>
                            	<td><a href="q_reply.php?id=<?php echo $rows['q_id']; ?>"><?php echo $i ?></a></td>
                                <td><a href="q_reply.php?id=<?php echo $rows['q_id']; ?>"><?php echo $rows['subject']?></a></td>
                                <td><a href="q_reply.php?id=<?php echo $rows['q_id']; ?>"><span style="color:green" class="fui-new">  </span> </a>
                                <td><a href="q_reply.php?id=<?php echo $rows['q_id']; ?>"><?php echo $rows['q_creater']?></a></td></td>
                            </tr><?php
						}
					
					
					}
					else
					{?>
							<tr><td></td>
                            	<td>No Questions Asked For Your Semester</td>
                                <td></td>
                            </tr><?php
					}
			   
			   
			   ?>
               </tbody>
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