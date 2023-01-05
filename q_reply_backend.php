<?php
	session_start();
	if(!isset($_SESSION['user_logged']))
	{
	
		header("location:login_first.php");
	
	}

	$id=$_SESSION['id'];
	$us=$_SESSION['user_logged'];
	$repli=$_POST['repli'];
	
	include("connection/connect.php");
	$z="que_".$id;
	$q="insert into $z (replier,reply,time) values ('$us','$repli',now());";
	$result=mysqli_query($conn,$q);
	if(mysqli_affected_rows($conn)>0)
	{
		header("location:q_reply.php?id=$_POST[id]");
	}
	else
	{
		header("forum.php");
	}
?>