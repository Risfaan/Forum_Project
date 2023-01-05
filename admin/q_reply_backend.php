<?php
	session_start();
	if(!isset($_SESSION['admin_logged']))
	{
	
		header("location:login_first.php");
	
	}

	$id=$_SESSION['id'];
	$us=$_SESSION['admin_logged'];
	$repli=$_POST['repli'];
	
	include("connection/connect.php");
	$z="que_".$id;
	$q="insert into $z (replier,reply,time) values ('$us','$repli',now());";
	$result=mysqli_query($conn,$q);
	//if(mysqli_affected_rows($conn)>0)
	{
		header("location:q_reply_admin.php?id=$_POST[id]");
	}
	
?>