<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="loginpage.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-login</title>
</head>
<body>
<div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="" method="post">
            <div class="input-boxes">
             Password
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name='a-pass' width='500px' placeholder="Enter your password" required>
              </div>
              <div class="button input-box">
                <input type="submit" name='submit' value="Sumbit">
              </div>
            </div>
        </form>
      </div>
      
    <?php
if(isset($_POST['a-pass'])){
    $pid=$_POST['a-pass'];
    if($pid=="root"){
        session_start();
	
        // Add values to the session.
        $_SESSION['user'] = 'admin'; // s
        echo"<script language='javascript'>
			
        location.href='admin.php';
 </script>";
    } else{
        echo"<script language='javascript'>
		alert('invalid password');	
        location.href='admin-login.php';
 </script>";
    } 
  
}

    
    ?>
</body>
</html>