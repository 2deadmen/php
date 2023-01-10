<?php
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']== 'POST')

{
//form variables
session_start();
$Parent_id=$_SESSION['pid'];
$name=$_POST['HName'];
$txtDOB=$_POST['DOB'];
$address=$_POST['address'];
$phone=$_POST['Phone_No'];
$txtEdu=$_POST['Education'];
$txtrel=$_POST['Religion'];
$Language=$_POST['Mothertongue'];
$txtdat=$_POST['Marriage_Date'];
$txtplace=$_POST['Marriage_Place'];
try {
	$marriagedoc=addslashes(file_get_contents($_FILES['marriagedoc']['tmp_name']));
	$pancard=addslashes(file_get_contents($_FILES['PAN_card']['tmp_name']));
	$adharcard=addslashes(file_get_contents($_FILES['Adhar_card']['tmp_name']));
	$medcertificate=addslashes(file_get_contents($_FILES['Medical_cer']['tmp_name']));
	$passbook=addslashes(file_get_contents($_FILES['Bank_Details']['tmp_name']));
	$txtsign=addslashes(file_get_contents($_FILES['Signature']['tmp_name']));
}catch(Exceptio $e){

}
//db connection
require('dbconnect.php');
if($conn->connect_error)
	  {
  		die("Connection failed:" .$conn->connect_error);
	  }
	else
	  {
	    $sql = "INSERT INTO `h_personal_details` (`Parent_id`, `HName`, `DOB`, `address`, `Phone_No`, `Education`, `Religion`, `Mothertongue`, `Marriage_Date`, `Marriage_Place`,`marriagedoc`,`PAN_card`,`Adhar_card`,`Medical_cer`,`Bank_Details`,`Signature`) VALUES ( '$Parent_id', '$name', '$txtDOB', '$address', '$phone', '$txtEdu', '$txtrel', '$Language', '$txtdat','$txtplace','$marriagedoc','$pancard','$adharcard','$medcertificate','$passbook','$txtsign')";
        if($conn->query($sql)===TRUE)
		 {
			echo"<script language='javascript'>
			
			location.href='w_personal_details.php';
	 </script>";			
		}
	  
	  }

//

}
?>
<?php
	error_reporting(E_ALL);
?>	