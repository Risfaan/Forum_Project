<?php


session_start();

if(isset($_POST['login']))
{
	include("connection/connect.php");
	$uid=$_POST["username"];
	$pas=$_POST["password"];


	$sq="select username,password from admin where username='$uid' and password = '$pas';";  /* where uname='uid' AND password ='pas'";*/
	$result = mysqli_query($conn,$sq);
	$rows=mysqli_num_rows($result);

	if($rows==0)
	{
		header("location:incorrect_login.php");
	}
	else
	{
		$_SESSION['admin_logged']=$uid;
		
		header("location:home.php");


	}
}
else
{

	header("location:invalid_entry.php");

}

/*$count=mysql_num_rows($result);
if ($count==true)*/
?>