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
	</head>
<body background="images/bg1.jpg" id="bg" OnLoad="document.myform.username.focus();">

<?php include("menu_header.php");?>
<!--include("menu_header.php");-->
<!--
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
                <input type="text"  name="username" placeholder="" class="form-control input-lg" required >
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

<br/><br/><br/><br/><br/><br/>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>