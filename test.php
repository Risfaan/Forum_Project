<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

	 <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Subject :
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
             <?php
			 // $tab= $c."_".$s;
			  include("connection/connect.php");
			  $q="select * from bca_sem1";
			  $ex_qry = mysqli_query($conn,$qry);
			while($rows1 = mysqli_fetch_assoc($ex_qry))
			{
			  
			  
			  ?>
                <li><?php echo $rows1['sub']; ?></li>
				
				<?php
				
				}
			?>
              </ul>
            </div>
         <br>
    
<body>
</body>
</html>
