<?php
	session_start();
	
	if(!isset($_SESSION['admin_logged']))
	{
	
		header("location:login_first.php");
	
	}
	if(isset($_POST["add"]))
	{
		include("../connection/connect.php");
		
		$c=$_POST["course"];
		$q="select c_name from ug_courses where c_name='$c';";
		
		$result=mysqli_query($conn,$q);
		$rows=mysqli_num_rows($result);
		if($rows==0)
		{
				$q="insert into ug_courses (c_name) values ('$c');";
				$result=mysqli_query($conn,$q);
				$q1="create table $c (s_id int(50) primary key AUTO_INCREMENT,sem varchar(50) UNIQUE);";
				$result1=mysqli_query($conn,$q1);
				if($result1)
				{
				
					header("location:successful_course.php");
				}
				
		}
		else
		{
			header("location:ug_course_exist.php");
		}
		
	
	}
	else
	{
	
		header("location:invalid.php");
	
	}
?>