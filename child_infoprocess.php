<?php
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']== 'POST')

{
//form variables

$pid=$_POST['Parent_id'];
$name=$_POST['Name'];
$gender=$_POST['Gender'];

$age=$_POST['Age'];
$bio=$_POST['Bio_Adopted'];

//db connection
require('dbconnect.php');
if($conn->connect_error)
	  {
  		die("Connection failed:" .$conn->connect_error);
	  }
	else
	  {
	    $sql ="INSERT INTO `child_info`(`Parent_id`, `Name`, `Gender`, `Age`, `Bio_Adopted`) VALUES ('$pid','$name','$gender','$age','$bio')";
        if($conn->query($sql)===TRUE)
		 {
			echo"<script language='javascript'>
			
			location.href='h_fam_details.php';
	 </script>";	
			
		}
	  
	  }

//

}
?>