<?php

	session_start();
	if(isset($_SESSION['user_logged']))
	{
	
		header("location:../logout_first.php");
	
	}
	if(isset($_SESSION['admin_logged']))
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
	</head>
<body background="images/bg1.jpg">
<br><br><br>
<section>
	<header>
		<center><img id="header_img" class="img img-responsive" src="../images/forum1.png"/></center>
	</header>
</section>


<?php include("menu_header.php");?>
<!--include("menu_header.php");-->
<!--
 <nav class="navbar navbar-default navbar-fixed-top" id="menu_op">
	<div class="container-fluid">

		<!--logo-/->
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
				<li class="active"><a href="login.php">Log In</a></li>    
			</ul>

		</div>
	</div>
</nav>-->

<center><!--<h5><u>Forum .com</u></h5>--><br><h2>Admin Panel</center>



<!--include("menu_header.php");-->


<div class="container">
  <div class="row">
  	<div class="col-md-6">
    
          <form class="form-horizontal" action="logincheck.php" method="POST">
          <fieldset>
            <div id="legend">
              <legend class="">Log In</legend>
            </div>
            <div class="control-group">
              <label class="control-label" for="username">                        Username</label>
              <div class="controls">
                <input type="text" id="username" name="username" placeholder="" class="form-control input-lg" required ></center>
              </div>
            </div>
         
            
            <div class="control-group">
              <label class="control-label" for="password">Password</label>
              <div class="controls">
                <input type="password" id="password" name="password" placeholder="" class="form-control input-lg" required >
              </div>
            </div>
         <br>
            
            <div class="control-group">
              <!-- Button -->
              <div class="controls">
                <button class="btn btn-success" name="login" value="login">Log In</button>
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



