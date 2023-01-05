<?php
	session_start();
	if(!isset($_SESSION['admin_logged']))
	{
	
		header("location:login_first.php");
	
	}
	
	
	$id=$_GET['id'];
	include("../connection/connect.php");
	$q="delete from users where uid = '$id';";
	$result=mysqli_query($conn,$q);
	
	
//	echo mysqli_affected_rows($conn);
	
	
	if(mysqli_affected_rows($conn)>0)
	{
		header("location:remove_student_successful.php");
	}
	else
	{
		header("location:remove_student_unsuccessful.php");
	}
	
?>

