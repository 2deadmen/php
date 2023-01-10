<?php
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']== 'POST')

{
//form variables

$pid=$_POST['Parent_id'];
$age=$_POST['Age'];
$gender=$_POST['Gender'];
//db connection
require('dbconnect.php');
if($conn->connect_error)
	  {
  		die("Connection failed:" .$conn->connect_error);
	  }
	else
	  {
	    $sql ="INSERT INTO `child_desired`(`Parent_id`,`Age`,`Gender`) VALUES ('$pid','$age','$gender')";
        if($conn->query($sql)===TRUE)
		 {
			echo"<script language='javascript'>
			
			location.href='other_docs.php';
	 </script>";				
		}
	  
	  }

//

}
?>