<?php
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']== 'POST')

{
//form variables
$pid=$_POST['Parent_id'];
$name=$_POST['Name'];
$desig=$_POST['Designation'];
$add=$_POST['Address'];
$phone=$_POST['Phone_no'];
$adhar=$_POST['Adhar_No'];

//db connection
require('dbconnect.php');
if($conn->connect_error)
	  {
  		die("Connection failed:" .$conn->connect_error);
	  }
	else
	  {
	    $sql ="INSERT INTO `reference`( `Parent_id`, `Name`, `Designation`, `Address`, `Phone_no`, `Adhar_No`) VALUES ('$pid','$name','$desig','$add','$phone','$adhar')";
        if($conn->query($sql)===TRUE)
		 {
			echo"<script language='javascript'>
			
			location.href='status.php';
	 </script>";	
		}
	  
	  }

//

}
?>