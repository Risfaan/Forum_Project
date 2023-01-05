<?php
	
	session_start();
	if(!isset($_SESSION['user_logged']))
	{
	
		header("location:login_first.php");
	
	}
	
	$subject=$_POST['subject'];
	$question=$_POST['question'];
	$topic=$_POST["topic"];
	$us=$_SESSION['user_logged'];
	include("connection/connect.php");
	$q="select username,course,sem from users where username like '$us';";
	$result=mysqli_query($conn,$q);
	$row=mysqli_fetch_assoc($result);
	$creater=$row['username'];
	$course=$row['course'];
	$sem=$row['sem'];
	
	$q1="insert into question (qname,q_creater,time,subject,topic,course,sem) values ('$question','$creater',now(),'$subject','$topic','$course','$sem');";
	$result1=mysqli_query($conn,$q1);
	
		$q2="select q_id from question where qname = '$question';";
		$result2=mysqli_query($conn,$q2);
		$row=mysqli_fetch_assoc($result2);
		$tab="que"."_".$row['q_id'];
		$q3="create table $tab (r_id int(50)primary key AUTO_INCREMENT,replier varchar(20),reply varchar(200),time datetime(6));";
		$result3=mysqli_query($conn,$q3);
	
		header("location:profile.php");
?>
