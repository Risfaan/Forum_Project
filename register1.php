<?php
	session_start();
	if(isset($_SESSION['user_logged']))
	{
	
		header("location:logout_first.php");
	
	}
?>

<html>
	<head>
		<title>Bootstrap</title>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/flat-ui.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<?php include("style.php");?>       
  <!--  <link href="bootstrap-responsive.css" rel="stylesheet">-->
 

	</head>
<body > <!--background="images/bg1.jpg">



<!-- include("menu_header.php");-->
<?php include("menu_header.php");?>
<!--
<nav class="navbar navbar-default navbar-fixed-top" id="menu_op">
	<div class="container-fluid">

		<!--logo--
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
				<li><a href="index.php">HOME</a></li>    
				<li><a href="login.php">Log In</a></li>
				<li><a href="register.php">Register</a></li>
			</ul>

		</div>
	</div>
</nav>-->
<br>
<br>

<!--<div class="container-fluid" style="border: 3px solid #000;">
	<div class="row">
    	&nbsp;
    </div>-->
<br>
<br>

<div class="container" >
  <div class="row">
  	<div class="col-md-6">
		
          <form class="form-horizontal"   action="register_backend.php" method="post" enctype="multipart/form-data">
          <fieldset>
            <div id="legend">
              <legend class="">Register</legend>
            </div>
            <div class="control-group">
              <label class="control-label" for="username">Username</label>
              <div class="controls">
                <input type="text" id="username" name="username" placeholder="" class="form-control input-lg" value="<?php echo $_POST['username']; ?>" readonly >
                
              </div>
            </div>
         
            <div class="control-group">
              <label class="control-label" for="email">E-mail</label>
              <div class="controls">
                <input type="email" id="email" name="email" placeholder="" class="form-control input-lg"  value="<?php echo $_POST['email']; ?>" readonly  >
                
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label" for="email">Phone Number</label>
              <div class="controls">
                <input type="phonenumber" id="phonenumber" name="phonenumber" placeholder="" class="form-control input-lg"  value="<?php echo $_POST['phonenumber']; ?>" readonly  >
                
              </div>
            </div>
         
            <div class="control-group">
              <label class="control-label" for="password">Password</label>
              <div class="controls">
                <input type="password" id="password" name="password" placeholder="" class="form-control input-lg"  value="<?php echo $_POST['password']; ?>" readonly  >
                
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label" for="password">Selected Course :</label>
              <div class="controls">
                <input type="course1" id="course" name="course" placeholder="" class="form-control input-lg"  value="<?php echo $_POST['course']; ?>" readonly  >
                
              </div>
            </div>

			<label for="sel1">Select Semister :</label>
              
                <select name="semi" class="form-control" style="width:200px">
                	<?php		$c=$_POST['course'];
							    include("connection/connect.php");
						
								$q="select * from $c;";
								$result=mysqli_query($conn,$q);
								//$rows=mysqli_fetch_assoc($result);
								while($rows=mysqli_fetch_assoc($result))
								{
								?><option><?php echo $rows['sem'];?></option><?php 
								}?>
                                
                                <!--<span class="badge">12</span></li>-->
 					 
				</select>
			             
              	
              
			
			<div class="control-group">
              <label class="control-label">Profile Picture</label>
              <div class="controls">
             
                <input type="file" name="photo" size="80"  class="form-control input-lg" >
                
              </div>
            </div>         
         <br>
            <div class="control-group">
              <!-- Button--> 
              <div class="controls">
                <input type="submit" name="submit" class="btn btn-success" value="submit"/>
              </div>
            </div>
          </fieldset></form>
        
	
    </div> 
  </div>
</div>
		
		
<!--		<form method="post" enctype="multipart/form-data" action="register_backend.php">
				<table>				
					
					<tr>
					<td><h6>Username</h6><input name="usname" type="text" maxlength="95" class="form-control input-sm" placeholder="Model Name"/></td>
					</tr>
					
					
					<tr>
					<td>&nbsp;</td>
					</tr>

					<tr>
					<td><h6>Password</h6><input name="uspass" type="password" maxlength="95" class="form-control input-sm" placeholder="Model Name"/></td>
					</tr>
					
					
					<tr>
					<td>&nbsp;</td>
					</tr>	
					
					<tr>
					<td><h6>E-mail</h6><input name="mail" type="text" maxlength="95" class="form-control input-sm" placeholder="Model Name"/></td>
					</tr>
					
					
					<tr>
					<td>&nbsp;</td>
					</tr>	
					
					<tr>
					<td><h6>Phone</h6><input name="phone" type="text" maxlength="95" class="form-control input-sm" placeholder="Model Name"/></td>
					</tr>
					
					
					<tr>
					<td>&nbsp;</td>
					</tr>	
					
					
				
					<tr>
					<td><h6>Upload Image</h6><input name="prof_pic" type="file" class="form-control input-sm"/></td>
					</tr>
					
					
					<tr>
					<td>&nbsp;</td>
					</tr>						
							
					
					<tr>
					<td align="center" colspan="2"><input name="submit" type="submit" class="btn btn-success" value="Add Project"/>&nbsp;&nbsp;&nbsp;<input type="reset" class="btn btn-default" value="Reset"/></td>
					</tr>	
				</table>
			</form>-->
    































<!-- <form name="registration" method="post" action="registration.php">
	<table border=1>
    	<tr>
		<!-- we will create registration.php after registration.html -/->
		USERNAME :<input type="text" name="name" value=""></br>
		</tr>
        <tr></tr><tr></tr>
        <tr>
		PASSWORD :<input type="text" name="password" value=""></br>
		</tr>
        <tr>
        RE-PASSWORD :<input type="text" name="repassword" value=""></br>
    	</tr>
        <tr>
    	EMAIL-ID :<input type="text" name="email" value=""></br>
    	</tr>
        <tr>
    	Phone Number :<input type="text" name="email" value=""></br>
    	</tr>
        <tr align="center">
			<input type="submit" name="submit" value="submit">
        </tr>
       </table>
</form>

<br>
<br>
<br>
<br>
<br>

</div>






<!--
<section>
	<header>
		<img id="header_img" class="img img-responsive" src="images/header.jpg"/>
	</header>
</section> -->

<!--
<div class="container-fluid" style="border: 3px solid #000;">
	<div class="row">
		<p>&nbsp;</p>
	</div>
	<div class="row">
		<div class="col-md-1">
			<p>&nbsp;</p>
		</div>

 		<div class="col-md-3">
			<table class="table table-bordered">
			<tr>
			<td colspan="2"><img src="images/i1.jpg" class="img img-responsive img-circle"/></td>
			</tr>
			<tr>
			<th>AKSHAR PATEL</th>
			</tr>
			<tr>
			<td>Python Developer</td>
			</tr>
			</table>
		</div>

		<div class="col-md-1">
			<p>&nbsp;</p>
		</div>

		<div class="col-md-3">
			<table class="table table-bordered">
			<tr>
			<td colspan="2"><img src="images/i2.jpg" class="img img-responsive img-circle"/></td>
			</tr>
			<tr>
			<th>ROMAN SHAIKH</th>
			</tr>
			<tr>
			<td>C/C++ Developer</td>
			</tr>
			</table>
		</div>

		<div class="col-md-1">
			<p>&nbsp;</p>
		</div>

		<div class="col-md-3">
			<table class="table table-bordered">
			<tr>
			<td colspan="2"><img src="images/i3.jpg" class="img img-responsive img-circle"/></td>
			</tr>
			<tr>
			<th>RAVI PARMAR</th>
			</tr>
			<tr>
			<td>Tonda Developer</td>
			</tr>
			</table>
		</div>

	</div>
</div>-->


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>