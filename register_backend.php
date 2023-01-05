<?php
		if(isset($_POST['submit']))
		{
			include("connection/connect.php");
			$user = $_POST['username']; 
			$email = $_POST['email']; 
			$pno=$_POST['phonenumber'];
			$pas = $_POST['password'];
		//	$photo=$_POST['photo'];
			$course=$_POST['course'];
			$sem=$_POST['semi'];	
		
	
	 		$q="select username from users where username='$user';";
			$ex_qry=mysqli_query($conn,$q);
			$rows=mysqli_num_rows($ex_qry);
			if($rows==0)
			{	
	
				
				//move_uploaded_file($_FILES['file']['tmp_name'],'images/user/'.$_FILES['file']['name']);
								
					$img_name=basename($_FILES['photo']['name']);
					$dir_name='images/user/'.$img_name;
					move_uploaded_file($_FILES['photo']['tmp_name'],$dir_name);		
					$dir_name='images/user/'.$img_name;
				

		
		
				$query = "INSERT INTO users (username,email,phonenumber,password,photo,course,sem) VALUES ('$user','$email','$pno','$pas','$dir_name','$course','$sem');"; 
				$data = mysqli_query ($conn,$query); 
				if($data) 
				{ 
			
					header("location:successfull_register.php");
					//echo "YOUR REGISTRATION IS COMPLETED..."; 
				}
			}
			else
			{
			
				header("location:user_exist.php");
			
			}
		}
		/*else
		{
	
			header("location:file_size.php");

		}		*/
		
	/*echo "$user<br>";
	echo "$email<br>";
	echo "$pno<br>";
	echo "$pas<br>";*/

?>