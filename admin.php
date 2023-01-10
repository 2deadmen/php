<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
</head>
<body>
 <button style='float:right' > <a href="logout.php">Logout</a> </button>

<?php
session_start();
if (!isset($_SESSION['user'])) {
    echo "<script language='javascript'>
			
        location.href='login.php';
 </script>";	
}else if($_SESSION['user']!=='admin'){
    echo "<script language='javascript'>
			
    location.href='admin-login.php';
</script>";	
  }



?>

  <script>
    function update(state,pid){
      var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() 
        {
            if (this.readyState == 4 && this.status == 200) 
            {
                document.getElementById("btns").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "update.php?q=" + state +"&pid=" + pid, true);
        xmlhttp.send();
    }

    function fetch(email) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() 
        {
            if (this.readyState == 4 && this.status == 200) 
            {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "getuserdata.php?q=" + email, true);
        xmlhttp.send();
    }
  </script>
       <?php 
       include('dbconnect.php');
       
      
       
       $sql1 = "SELECT `Parent_id`,`Username`,`status`  FROM registration";
        $result = $conn->query($sql1);

       if($result->num_rows>0)//when db records are found store in associative array...
         {
                 // output data of each row
             echo " <h2>  Users </h2><table>";      
             while($row = $result->fetch_assoc())
              {
               echo "<tr><td><button  onclick='fetch(`".$row["Parent_id"]."`)'>".  $row["Username"]. "</button> </td><td>------  ".$row['status']."</td></tr><br/>";
              }
              echo "</table>";
         }
         else
           {
             echo " No DB results";
           }


        ?>
  <div id="txtHint"></div>
</body>
</html>