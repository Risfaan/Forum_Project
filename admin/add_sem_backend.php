<?php
	session_start();
	if(!isset($_SESSION['admin_logged']))
	{
	
		header("location:login_first.php");
	
	}
	$course=$_POST['d'];
	/*$no_sem=$_POST['n'];
	for($i=1;$i<=$no_sem;$i++)
	{
		$sems.$i=$_POST['$i'];
	}*/
	$sems=$_POST['sems'];
	$flag=0;
	foreach( $sems as $a)
	{	
		include("../connection/connect.php");
		$q="select sem from $course where sem like '$a';";
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
		foreach( $sems as $a)
		{	
			include("../connection/connect.php");
		
			$qry="insert into $course (sem) values ('$a');";
			$result1=mysqli_query($conn,$qry);
			$z="$course"."_"."$a";
			$q="create table $z (sub_id int(50) primary key AUTO_INCREMENT,sub varchar(50) UNIQUE);";
			$result2=mysqli_query($conn,$q);
		}
		header("location:sem_add_successful.php");
		
	}
	else
	{
		header("location:sem_exist.php");
	}
	
	//echo $course;
	//echo $no_sem;
	
	/*include("../connection/connect.php");
	for($i=1;$i<=no_sem;$i++)
	{
		$q="select sem from $d where sem like '$sem.$i';";
		$result=mysqli_query($conn,$q);
		if(mysqli_num_rows($result)==0)
		{
			/*$qry="isert into $course sem values ('$sem1');";
			$result1=mysqli_query($conn,$qry);
			header("location:sem_add_succssfull.php");
			echo "Successful";
		}
		else
		{
			/*header("location:sem_add_unsuccssfull.php");*
			echo "Unsuccessful";
		}
	}*/
?>