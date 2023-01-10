<?php
  $state=$_GET['q'];
  $p_id=$_GET['pid'];
  if($state=='1'){
    $state="accepted";
  }else if($state=='2'){
    $state="rejected";
  }else{
    $state="pending";
  }
  require('dbconnect.php');
  $sql1 = "UPDATE `registration` SET `status` = '$state' WHERE `registration`.`Parent_id` = '$p_id';";
  if($conn->query($sql1)===TRUE)
  {
    $sql1="SELECT `status` FROM `registration` where `Parent_id`='$p_id'";
    $result = $conn->query($sql1);
     if($result->num_rows>0)//when db records are found store in associative array...
    {
      // output data of each row

  while($row = $result->fetch_assoc())
   {
    $state=$row['status'];
   }
   if($state=='pending'){
    echo "Pending ";
   }
   elseif($state=='accepted'){
    echo "Accepted";
   }
   else{
    echo "Rejected";
   }

}else{
echo "no results";
}
  }else{
    echo "sorry couldn't process";
    
   echo "<div id='btns'><button onclick='update(`1`,`$p_id`)'>accept </button>&nbsp;<button onclick='update(`2`,`$p_id`)'>reject </button> </div>";
         
  }

//end  
  
  
  ?>