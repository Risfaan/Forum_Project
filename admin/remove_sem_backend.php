<?php
	session_start();
	if(!isset($_SESSION['admin_logged']))
	{
	
		header("location:login_first.php");
	
	}
	
	
	$id=$_GET['id'];
	$course=$_GET['c_id'];
	$sem=$_GET['sem'];
	//echo $course;
	//echo $id;
	
	include("../connection/connect.php");
	$q="delete from $course where s_id = '$id';";
	$result=mysqli_query($conn,$q);
	
	if(mysqli_affected_rows($conn)>0)
	{
		header("location:remove_sem_successful.php");
	}
	else
	{
		header("location:remove_sem_unsuccessful.php");
	}
	
	$z=$course."_".$sem;
	
	$qr="drop table $z";
	mysqli_query($conn,$qr);
	
	
//	echo mysqli_affected_rows($conn);
	
	
	
	
?>

