<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>status</title>
</head>
<body><?php
   require('session.php'); 
    ?>

   <a align='center' href="index.php">Home</a>


    <?php
if(isset($_SESSION['pid'])){
    $pid=$_SESSION['pid'];
    require('./dbconnect.php');
    $sql1="SELECT `status` FROM `registration` where `Parent_id`='$pid'";
		$result = $conn->query($sql1);
		 if($result->num_rows>0)//when db records are found store in associative array...
        {
		  // output data of each row

	  while($row = $result->fetch_assoc())
	   {
		$state=$row['status'];
	   }
       if($state=='pending'){
        echo "<h1>your application is under review</h1> ";
       }
       elseif($state=='accepted'){
        echo "<h1>your application has been Accepted</h1>";
       }
       else{
        echo "<h1>Sorry..your application was Rejected...</h1>";
       }

}else{
    echo "invalid Parent id";
}
}
    
    ?>

</body>
</html>