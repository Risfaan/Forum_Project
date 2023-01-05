<?php
	session_start();
	if(!isset($_SESSION['admin_logged']))
	{
	
		header("location:login_first.php");
	
	}
	
	
	$id=$_GET['id'];
	//echo $course;
	//echo $id;
	$tab="que_".$id;
	include("../connection/connect.php");
	$q="delete from question where q_id = '$id';";
	$result=mysqli_query($conn,$q);
	$qr="drop table $tab;";
	$result1=mysqli_query($conn,$qr);
	
	//if(mysqli_affected_rows($conn)>0)
	{
		header("location:remove_question.php");
	}

	

	
	
//	echo mysqli_affected_rows($conn);
	
	
	
	
?>

