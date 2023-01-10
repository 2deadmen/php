<?php
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST')
{
//form variables
$uname=$_POST['name'];
$pswd=$_POST['Pass'];

//db connection
require('dbconnect.php');
if($conn->connect_error)
	  {
  		die("Connection failed:" .$conn->connect_error);
	  }
	else
	  {
	
		$sql1="SELECT `Password`,`Parent_id` FROM `registration` where `Email`='$uname'";
		$result = $conn->query($sql1);
		 if($result->num_rows>0)//when db records are found store in associative array...
        {
		  // output data of each row

	  while($row = $result->fetch_assoc())
	   {
		$pass=$row['Password'];
		$pid= $row['Parent_id'];
	   }
		if($pass==md5($pswd)){
			session_start();
	
			$_SESSION['user'] = $pass; 
			$_SESSION['pid'] = $pid;
			echo"<script language='javascript'>
	
			window.location.href ='index.php';
	 </script>";
		}
		else{
			echo "<script language='javascript'>
	        
			alert('wrong password');
			location.href='login.php';
	 </script>";
		}
	   }else{
		echo "<script language='javascript'>
	        
			alert('user do not exist');
			location.href='login.php';
	 </script>";
	   }
	 
  }
	
}
?>
