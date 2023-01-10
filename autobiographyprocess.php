	<?php
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']== 'POST')

{
//form variable
$pid=$_POST['Parent_id'];
$name=$_POST['Name'];
$dob=$_POST['dob'];
$edu=$_POST['Education'];
$occu=$_POST['Occupation'];
$mrtlstatus=$_POST['Marital_status'];
$res=$_POST['current_residency'];
$reltype=$_POST['relation_type'];

//db connection
require('dbconnect.php');
if($conn->connect_error)
	  {
  		die("Connection failed:" .$conn->connect_error);
	  }
	else
	  {
	    $sql = "INSERT INTO `autobiography`( `Parent_id`, `Name`, `dob`, `Education`, `Occupation`, `Marital_status`, `current_residency`, `relation_type`) VALUES ('$pid', '$name', '$dob', '$edu', '$occu', '$mrtlstatus', '$res','$reltype')";
        if($conn->query($sql)===TRUE)
		 {
  		  echo"<script language='javascript'>
			
			location.href='Questionires.php';
	 </script>";
			
		}
	  
	  }

//

}
?>