<?php
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']== 'POST')

{
//form variables


$Parent_id=$_POST['Parent_id'];
$affltr=addslashes(file_get_contents($_FILES['affidivit_letter']['tmp_name']));

$undrtking=addslashes(file_get_contents($_FILES['Undertaking_Letter']['tmp_name']));
$property=addslashes(file_get_contents($_FILES['Property_declaration']['tmp_name']));
$famphoto=addslashes(file_get_contents($_FILES['Family_photo']['tmp_name']));
$marriagecer=addslashes(file_get_contents($_FILES['marriage_certificate']['tmp_name']));

//db connection
require('dbconnect.php');
if($conn->connect_error)
	  {
  		die("Connection failed:" .$conn->connect_error);
	  }
	else
	  {
	    $sql ="INSERT INTO `other_docs`( `Parent_id`, `affidivit_letter`, `Undertaking_Letter`, `Property_declaration`, `Family_photo`, `marriage_certificate`) VALUES ('$Parent_id','$affltr','$undrtking','$property','$famphoto','$marriagecer')";
        if($conn->query($sql)===TRUE)
		 {
			echo"<script language='javascript'>
			
			location.href='reference.php';
	 </script>";	
		}
	  
	  }

//

}
?>