<?php
	session_start();
	if(!isset($_SESSION['admin_logged']))
	{
	
		header("location:login_first.php");
	
	}
	
	$course=$_POST['course'];
	$program=$_POST['program1'];
	echo $program;
	include("../connection/connect.php");
	if($program=='Under-Graduate')
	{
		$ex="delete from ug_courses where c_name = '$course' ;";
		$result2=mysqli_query($conn,$ex);
	}
	else
	{
		$ex="delete from pg_courses where c_name = '$course' ;";
		$result2=mysqli_query($conn,$ex);
	}
	
	$x="select count(*) from $course ;";
	$result1=mysqli_query($conn,$x);
	if( mysqli_affected_rows($conn)==1)
	{
	
		$q="select * from $course ;";
		$result=mysqli_query($conn,$q);
		while($row=mysqli_fetch_assoc($result))
		{
			$z=$course."_".$row['sem'];
			$qr="drop table $z;";
			mysqli_query($conn,$qr);
		}
		$qry="drop table $course;";
		mysqli_query($conn,$qry);
	
	}
	else
	{
		$qry="drop table $course;";
		mysqli_query($conn,$qry);
	}
	header("location:course_successful_deleted.php");
	/*
	while($row=mysqli_fetch_assoc($result))
	{
		$z=$course."_".$row['sem'];
		$qr="drop table $z;";
		mysqli_query($conn,$qr);
	}
	$qry="drop table $course;";
	mysqli_query($conn,$qry);*/
	
	
	
	
	
	
	
?>