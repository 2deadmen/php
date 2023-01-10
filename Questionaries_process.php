<?php
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']== 'POST')

{
//form variables

session_start();
$Parent_id=$_SESSION['pid'];
$Rooms_in_Home=$_POST['Rooms_in_Home'];
$Spare_Time=$_POST['Spare_Time'];
$Help_at_Home=$_POST['Help_at_Home'];
$Strng_pnts_Mrg=$_POST['Strng_pnts_Mrg'];
$Decision_for_Adopt=$_POST['Decision_for_Adopt'];
$Both_wish_Adopt=$_POST['Both_wish_Adopt'];
$Fam_Decision=$_POST['Fam_Decision'];
$Fam_Reaction=$_POST['Fam_Reaction'];
$ifNo_Reason=$_POST['ifNo_Reason'];
$Strength_as_Parent=$_POST['Strength_as_Parent'];
$ChildeCare_Absence=$_POST['ChildeCare_Absence'];
$Legal_Adopt=$_POST['Legal_Adopt'];
$Introducer=$_POST['Introducer'];
$Other_Details=$_POST['Other_Details'];
//db connection
require('dbconnect.php');
if($conn->connect_error)
	  {
  		die("Connection failed:" .$conn->connect_error);
	  }
	else
	  {
	    $sql ="INSERT INTO `questionires`(`Parent_id`, `Rooms_in_Home`, `Spare_Time`, `Help_at_Home`, `Strng_pnts_Mrg`, `Decision_for_Adopt`, `Both_wish_Adopt`, `Fam_Decision`, `Fam_Reaction`, `ifNo_Reason`, `Strength_as_Parent`, `ChildeCare_Absence`, `Legal_Adopt`, `Introducer`, `Other_Details`) VALUES ('$Parent_id','$Rooms_in_Home','$Spare_Time','$Help_at_Home','$Strng_pnts_Mrg','$Decision_for_Adopt','$Both_wish_Adopt','$Fam_Decision','$Fam_Reaction','$ifNo_Reason','$Strength_as_Parent','$ChildeCare_Absence','$Legal_Adopt','$Introducer','$Other_Details')";
        if($conn->query($sql)===TRUE)
		 {
            echo"<script language='javascript'>
			
			location.href='child_desired.php';
	 </script>";	
			
		}
	  
	  }

//

}
?>