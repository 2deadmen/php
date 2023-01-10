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

    <form align='center' style='margin:50px;' action="" method='post'>
        <div>Enter your parent id <br><br>
            <input type="number" name='pid'>
        &nbsp; <input type="submit" name='submit'></div>
    </form><a align='center' href="index.php">Home</a>


    <?php
if(isset($_POST['pid'])){
    $pid=$_POST['pid'];
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
        echo "Pending ";
       }
       elseif($state=='accepted'){
        echo "Accepted";
       }
       else{
        echo "Rejected";
       }

}else{
    echo "invalid Parent id";
}
}
    
    ?>

</body>
</html>