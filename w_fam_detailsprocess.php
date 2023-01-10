<?php
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']== 'POST')

{
//form variables
session_start();
$Parent_id=$_SESSION['pid'];
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
	    $sql ="INSERT INTO `w_fam_details`(`Parent_id`, `Name`, `relationship`, `Age`, `Occupation`,`liv_st`) VALUES ('$Parent_id','$name','$rel','$age','$occ','$liv')";
        if($conn->query($sql)===TRUE)
		 {
			echo"<script language='javascript'>
			
			location.href='autobiography.php';
	 </script>";
			
			
		}
	  
	  }

//

}
?>