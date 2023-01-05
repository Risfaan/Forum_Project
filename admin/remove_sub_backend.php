<?php
	session_start();
	if(!isset($_SESSION['admin_logged']))
	{
	
		header("location:login_first.php");
	
	}
	
	
	$id=$_GET['id'];
	//$course=$_POST['course2'];
	//$sem=$_POST['sem2'];
	$z=$_GET['c_id'];
	
	//echo $course;
	//echo $id;
	
	include("../connection/connect.php");
	$q="delete from $z where sub_id = '$id';";
	$result=mysqli_query($conn,$q);
	
	
//	echo mysqli_affected_rows($conn);
	
	
	if(mysqli_affected_rows($conn)>0)
	{
		header("location:remove_sub_successful.php");
	}
	else
	{
		header("location:remove_sub_unsuccessful.php");
	}
	
?>

