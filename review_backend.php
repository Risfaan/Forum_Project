<?php
	session_start();
	if(!isset($_SESSION['user_logged']))
	{
	
		header("location:login_first.php");
	
	}


	$review=$_POST['suggestion'];
	$us=$_SESSION['user_logged'];
	
	include("connection/connect.php");
	$q="insert into reviews (rev,r_giver,time) values ('$review','$us',now());";
	$result=mysqli_query($conn,$q);
	header("location:profile.php");



?>