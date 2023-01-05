<?php
	session_start();
	if(!isset($_SESSION['user_logged']))
	{
	
		header("location:login_first.php");
	
	}
	
	
	$id=$_GET['id'];
	$r_id=$_GET['r_id'];
	//echo $r_id;
	//echo $id;
	$tab="que_".$id;
	include("connection/connect.php");
	$q="delete from $tab where r_id = '$r_id';";
	$result=mysqli_query($conn,$q);
	
	
	//if(mysqli_affected_rows($conn)>0)
	{
		header("location:q_reply_admin.php?id=$id");
	}

	

	
	
//	echo mysqli_affected_rows($conn);
	
	
	
	
?>

