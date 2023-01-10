<?php
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']== 'POST')

{
//form variables
session_start();
$Parent_id=$_SESSION['pid'];
$name=$_POST['Name'];
$txtDOB=$_POST['DOB'];
$address=$_POST['Address'];
$phone=$_POST['Phone_no'];
$txtEdu=$_POST['Educaton'];
$txtrel=$_POST['Religion'];
$Language=$_POST['mothertounge'];
$txtdat=$_POST['marriage_date'];
$txtplace=$_POST['marriage_place'];
$mrgdoc=addslashes(file_get_contents($_FILES['marriagedoc']['tmp_name']));

$pancard=addslashes(file_get_contents($_FILES['PAN_card']['tmp_name']));
$adharcard=addslashes(file_get_contents($_FILES['Adhar_card']['tmp_name']));
$medcertificate=addslashes(file_get_contents($_FILES['Medical_certificate']['tmp_name']));
$passbook=addslashes(file_get_contents($_FILES['Bank_Details']['tmp_name']));
$txtsign=addslashes(file_get_contents($_FILES['signature']['tmp_name']));
//db connection
require('dbconnect.php');
if($conn->connect_error)
	  {
  		die("Connection failed:" .$conn->connect_error);
	  }
	else
	  {
	    $sql = "INSERT INTO `w_personal_details`(`Parent_id`, `Name`, `DOB`, `Address`, `Phone_no`, `Educaton`, `Religion`, `mothertounge`, `marriage_date`, `marriage_place`, `marriagedoc`, `PAN_card`, `Adhar_card`, `Medical_certificate`, `Bank_Details`, `signature`) VALUES ('$Parent_id', '$name', '$txtDOB', '$address', '$phone', '$txtEdu', '$txtrel', '$Language','$txtdat','$txtplace','$mrgdoc','$pancard','$adharcard','$medcertificate','$passbook','$txtsign')";
        if($conn->query($sql)===TRUE)
		 {
  		  
  		  echo"<script language='javascript'>
			
			location.href='h_employement_det.php';
	 </script>";	
			
		}
	  
	  }

//

}
?>