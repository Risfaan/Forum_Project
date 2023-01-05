<?php
	session_start();
	if(!isset($_SESSION['admin_logged']))
	{
	
		header("location:login_first.php");
	
	}

	include("../connection/connect.php");
	$id=$_GET['id'];
	
	$q="delete from reviews where r_id = '$id';";
	$result=mysqli_query($conn,$q);
	header("location:profile.php");



?>