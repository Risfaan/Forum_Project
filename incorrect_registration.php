<html>
	<head>
		<title>Bootstrap</title>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/flat-ui.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
       	<?php include("style.php");?>
  <!--  <link href="bootstrap-responsive.css" rel="stylesheet">-->
 

	</head>
<body background="images/bg1.jpg">


<?php include("menu_header.php");?>

<!-- include("menu_header.php");-->
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
    
          <form class="form-horizontal" action="register1.php" method="POST">
          <fieldset>
            <div id="legend">
              <legend class="">Register</legend>
            </div>
            <div class="control-group">
              <label class="control-label" for="username">Username</label>
              <div class="controls">
                <input type="text" id="username" name="username" placeholder="Username Already Exist !! Try Another." class="form-control input-lg" required  >
                
              </div>
            </div>
         
            <div class="control-group">
              <label class="control-label" for="email">E-mail</label>
              <div class="controls">
                <input type="email" id="email" name="email" placeholder="" class="form-control input-lg" required >
                
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label" for="email">Phone Number</label>
              <div class="controls">
                <input type="phonenumber" id="phonenumber" name="phonenumber" placeholder="" class="form-control input-lg" required >
                
              </div>
            </div>
         
            <div class="control-group">
              <label class="control-label" for="password">Password</label>
              <div class="controls">
                <input type="password" id="password" name="password" placeholder="" class="form-control input-lg" required >
                
              </div>
            </div>
             <label for="course">Select Course :</label>
             
              	<select name="course" class="form-control" style="width:200px">
                	<?php
								include("connection/connect.php");
								$q="select * from ug_courses ;";
								$result=mysqli_query($conn,$q);
								//$rows=mysqli_fetch_assoc($result);
								while($row=mysqli_fetch_assoc($result))
								{
								?><option><?php echo $row['c_name'];?></option><?php  
								}
								
							
						
								
								$q="select * from pg_courses ";
								$result1=mysqli_query($conn,$q);
								while($rows=mysqli_fetch_assoc($result1))
								{
									?><option><?php echo $rows['c_name'];?></option><?php
								}								
							
                	?>
                
                </select>  
			
			<div class="control-group">
              <label class="control-label">Profile Picture</label>
              <div class="controls">
             
                <input type="file" name="photo" size="80"  class="form-control input-lg" >
                
              </div>
            </div>
         
         <br>
       
            <div class="control-group">
              <!-- Button -->
              <div class="controls">
                <button name="submit" value="submit" class="btn btn-success">Register</button>
              </div>
            </div>
          </fieldset>
        </form>
    
    </div> 
  </div>
</div>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>