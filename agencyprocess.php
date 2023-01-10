<?php
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']== 'POST')

{
//form variables
$agency_code=$_POST['AgencyCode'];
$name=$_POST['Name'];
$address=$_POST['Address'];
$phone=$_POST['phone_no'];
$email=$_POST['Email'];
//db connection
require('dbconnect.php');
if($conn->connect_error)
	  {
  		die("Connection failed:" .$conn->connect_error);
	  }
	else
	  {
	    $sql = "INSERT INTO `agency` (`AgencyCode`, `Name`, `Address`, `phone_no`, `Email`)  VALUES ( '$agency_code','$name','$address','$phone','$email')";
        if($conn->query($sql)===TRUE)
		 {
  		  echo "<h3> Stored New Image Record Successfully </h3>";
			
		}
	  
	  }

//

}
?>