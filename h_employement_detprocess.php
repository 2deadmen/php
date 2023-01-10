<?php
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']== 'POST')

{
//form variables
session_start();
$Parent_id=$_SESSION['pid'];
$occ=$_POST['occupation'];
$add=$_POST['office_address'];
$income=$_POST['income_salary'];

//db connection
require('dbconnect.php');
if($conn->connect_error)
	  {
  		die("Connection failed:" .$conn->connect_error);
	  }
	else
	  {
	    $sql ="INSERT INTO `h_employement_det`(`Parent_id`, `occupation`, `office_address`, `income_salary`) VALUES ('$Parent_id','$occ','$add','$income')";
        if($conn->query($sql)===TRUE)
		 {
  		  echo"<script language='javascript'>
			
			location.href='w_employement_det.php';
	 </script>";	
			
		}
	  
	  }

//

}
?>