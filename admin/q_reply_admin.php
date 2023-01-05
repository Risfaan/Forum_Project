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
					//$sem=$row[1];
					//$course=$row[2];
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
              
             <?php $id=$_GET['id'];
			   		$x="select count(q_id) as total from question where q_id='$id';";
					$resultx=mysqli_query($conn,$x);
					$row=mysqli_fetch_assoc($resultx);
						  //	echo $row['total'];
					if($row['total']==1)
					{?>   
               <h4>Question :</h4>
               <form name="f1" action="q_reply_backend.php" method="post" >
               
                   
                   
              <?php
						$_SESSION['id']=$id;
						$u=$_SESSION['admin_logged'];
						include("connection/connect.php");
						$q="select qname,time from question where q_id = '$id';";
						$result=mysqli_query($conn,$q);
						
						$row=mysqli_fetch_assoc($result);
						echo $row['qname'];?><br /><br /><small>Asked on:
						<?php 
							$time=$row['time'];
							$phpdate = strtotime( $time );
							$time = date( 'd-m-Y H:i:s', $phpdate );
							echo  $time;?></small>
					
					<h5>Replies :</h5>
				   
				   
				   <?php
						$tab="que"."_".$id;
						$q="select r_id,replier,reply,time from $tab;";
						$result=mysqli_query($conn,$q);
						if(mysqli_affected_rows($conn)>0)
						{
							while($row=mysqli_fetch_assoc($result))
							{
								echo $row['replier'];?>  :
								<?php 
	echo $row['reply'];?><a href="admin_q_reply_backend.php?id=<?php echo $_GET['id'];?>&r_id=<?php echo $row['r_id'];?>">  &nbsp; &nbsp;&nbsp;&nbsp;<span style="color:red" class="fui-cross">  </span> </a><br /><small>Replied on :
									<?php 
									$time=$row['time'];
									$phpdate = strtotime( $time );
									$time = date( 'd-m-Y H:i:s', $phpdate );
									echo  $time;?><br></small><br><?php
							}
						}
						else
						{
							echo "No Replies Given,Be the First to Reply !";?><br><?php
						}
				   ?><br />
				   
					<div class="form-group">
						<label for="comment">Give Your Reply :</label>
						<textarea class="form-control" rows="5" id="repli" name="repli" required ></textarea>
					</div>
					<br />
					
					<button class="btn btn-success" name="submit" value="submit">Submit</button><br /><br />
					<input class="form-control" style="width:150px" type="hidden" name="id" value="<?php echo $_GET['id']; ?>" readonly/>
				   </form>
				   
			   <?php }
			   else
			   {
			   		?><h4>No Such Questions</h4>
                <?php } ?>
			   
               
               </div>
            </div>
		</div>
	</div>
</div>



<script src="js/jquery.js"> </script>
<script src="js/bootstrap.min.js"> </script>
</body>
</html>