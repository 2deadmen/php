<?php
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']== 'POST')

{
//form variables
$pid=$_POST['Parent_id'];
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
	    $sql ="INSERT INTO `w_employement_det`(`Parent_id`, `occupation`, `office_address`, `income_salary`) VALUES ('$pid','$occ','$add','$income')";
        if($conn->query($sql)===TRUE)
		 {
			echo"<script language='javascript'>
			
			location.href='child_info.php';
	 </script>";	
			
			
		}
	  
	  }

//

}
?>