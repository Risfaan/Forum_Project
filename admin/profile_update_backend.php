<?php
	
	session_start();
	if(!isset($_SESSION['admin_logged']))
	{
	
		header("location:login_first.php");
	
	}
	
	
	 	if(isset($_POST['update']))
		{
		include("connection/connect.php");
		$user = $_SESSION['admin_logged']; 
		$email = $_POST['email']; 
		$pno=$_POST['phonenumber'];
		$pas = $_POST['password'];
		
			
		//move_uploaded_file($_FILES["file"]['tmp_name'],'images/user/');//.$_FILES['file']['name']);
		
		
		$img_name=basename($_FILES['photo']['name']);
		$dir_name='../images/user/'.$img_name;
		move_uploaded_file($_FILES['photo']['tmp_name'],$dir_name);		
		$dir_name='../images/user/'.$img_name;
		
		$dir_name='../images/user/'.$img_name;
		
		$q="update admin set email='$email',phonenumber='$pno',password='$pas',photo='$dir_name' where username='$user';";
		$ex_qry=mysqli_query($conn,$q);
		if($ex_qry)
		{
			include("logout.php");
			header("location:profile_update_successfull.php");
		}
		else
		{
			header("location:profile_update_unsuccessfull.php");
		}
		
	
		}
	else
	{
		header("location:file_size.php");
	}
	

?>