<?php
	$sub=$_POST["c"];
	$topic=$_POST["topic"];
	
	echo $sub;
	echo $topic;
	
	include("../connection/connect.php");
	$q="insert into topic (subject,name) values ('$sub','$topic')";
	$result=mysqli_query($conn,$q);
	
	if($result)
	{
		
		header("location:successfully_added.php");
	
	}
	else
	{
			echo "oooppppssss.........Somethimg went Wrong !!";
	}

?>