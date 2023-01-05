<?php

					include("connection/connect.php");
					$qry = "select photo from users where username='$_SESSION[user_logged]'";
					$ex_qry = mysqli_query($conn, $qry);
					$row = mysqli_fetch_array($ex_qry);
					echo $row[0];
				
				
				
/*if(!isset($_SESSION['user_logged']))
	{
	
		header("location:login_first.php");
	
	}
session_start();
$id=$_GET['id'];
if(!$id==1)
{

	header("location:invalid.php");

}
include("connection/connect.php");

	$uid=$_SESSION["user_logged"];
	


	$sq="select photo from users where username='$uid' ;";  /* where uname='uid' AND password ='pas'";*/
	/*$result = mysqli_query($conn,$sq);
	
	$row=mysqli_fetch_array($result);
	 header("Content-type: image/jpeg");
	echo $row[0];*/


?>