<?php
	session_start();
	if(!isset($_SESSION['admin_logged']))
	{
	
		header("location:login_first.php");
	
	}
	$course=$_POST['f'];
	$sems=$_POST['g'];
	/*$no_sem=$_POST['n'];
	for($i=1;$i<=$no_sem;$i++)
	{
		$sems.$i=$_POST['$i'];
	}*/
	$z=$course."_".$sems;
	$subs=$_POST['subs'];
	$flag=0;
	foreach( $subs as $a)
	{	
		include("../connection/connect.php");
		$q="select sub from $z where sub like '$a';";
		$result=mysqli_query($conn,$q);
		if(mysqli_num_rows($result)==0)
		{
			/*$qry="isert into $course sem values ('$sem1');";
			$result1=mysqli_query($conn,$qry);
			header("location:sem_add_succssfull.php");*/
		
		}
		else
		{
			
			/*header("location:sem_add_unsuccssfull.php");*/
			$flag=1;
			break;
		}
	}
	if($flag==0)
	{
		foreach( $subs as $a)
		{	
			include("../connection/connect.php");
		
			$qry="insert into $z (sub) values ('$a');";
			$result1=mysqli_query($conn,$qry);
		
			/*$q="create table $z (sub_id int(50) primary key AUTO_INCREMENT,sub varchar(50) UNIQUE);";
			$result2=mysqli_query($conn,$q);*/
		}
		header("location:sub_add_successful.php");
		
	}
	else
	{
		header("location:sub_exist.php");
	}
	
	//echo $course;
	//echo $no_sem;
	
?>