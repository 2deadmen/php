<?php
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']== 'POST')

{
//form variables
$pid=$_POST['Parent_id'];
$name=$_POST['Name'];
$rel=$_POST['relationship'];
$age=$_POST['Age'];
$occ=$_POST['Occupation'];
$liv=$_POST['liv_st'];

//db connection
require('dbconnect.php');
if($conn->connect_error)
	  {
  		die("Connection failed:" .$conn->connect_error);
	  }
	else
	  {
	    $sql ="INSERT INTO `h_fam_details`( `Parent_id`, `Name`, `relationship`, `Age`, `Occupation`,`liv_st`) VALUES ('$pid','$name','$rel','$age','$occ','$liv')";
        if($conn->query($sql)===TRUE)
		 {
			echo"<script language='javascript'>
			
			location.href='w_fam_details.php';
	 </script>";
			
		}
	  
	  }

//

}
?>