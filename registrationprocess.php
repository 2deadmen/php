

<?php

if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=="POST")
{
//form variables

$uname=$_POST['Username'];
$phone=$_POST['Phone_no'];

$email=$_POST['Email'];
$pswd=md5($_POST['Password']);

//db connection
require('dbconnect.php');
if($conn->connect_error)
	  {
  		die("Connection failed:" .$conn->connect_error);
	  }
	else
	  {
		$sql1="SELECT * FROM `registration` where `Email`='$email'";
		$result = $conn->query($sql1);
		 if($result->num_rows>0)//when db records are found store in associative array...
        {
		 
	  echo"<script language='javascript'>
	
	  alert('user already exists');
	  location.href='login.php';
</script>";
	  }else{
        $sql2 ="INSERT INTO `registration`( `Username`, `Phone_no`, `Email`, `Password`) VALUES ('$uname','$phone','$email','$pswd')";
        if($conn->query($sql2)===TRUE)
		 {
			$sql1="SELECT * FROM `registration` ORDER BY `Parent_id`  desc limit 1";
               $result = $conn->query($sql1);
			    if($result->num_rows>0)//when db records are found store in associative array...
         {
                 // output data of each row
             
             while($row = $result->fetch_assoc())
              {
               $id=$row['Parent_id'];
			
			      echo"<script language='javascript'>
                      
				      alert('registration success ...your parent id is ".$id."');
					  location.href='login.php';
			   </script>";
              }
			
         }
         	
		}
	  }

//

}}
?>


 <!-- -->