<?php
$conn=mysqli_connect("localhost","root","") or die("No Connection");
$db=mysqli_select_db($conn,"my_project") or die("No Database name");



/*if (mysqli_connect_errno($conn))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
echo "Successfully connected to your database…";
}*/
?>



