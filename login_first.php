<html>
	<head>
		<title>Bootstrap</title>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/flat-ui.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<?php include("style.php");?>
	</head>
<body background="images/bg1.jpg" id="bg">

<?php include("menu_header.php");?>
<!--include("menu_header.php");->
<nav class="navbar navbar-default navbar-fixed-top" id="menu_op">
	<div class="container-fluid">

		
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
<br>
<br>
<center> <h1> Log In First !! </h1></center>

<div class="container">
  <div class="row">
  	<div class="col-md-6">
    
          <form class="form-horizontal" action="logincheck.php" method="POST">
          <fieldset>
            <div id="legend">
              <legend class="">Log In</legend>
            </div>
            <div class="control-group">
              <label class="control-label" for="username">Username</label>
              <div class="controls">
                <input type="text" id="username" name="username" placeholder="" class="form-control input-lg" required >
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