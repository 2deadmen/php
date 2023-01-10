<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body bgcolor="white">
<h2 align="center">Agency information</h2>
<table  align="center" border="3" cellspacing="5" cellpadding="6">
<form action="agencyprocess.php" method="POST" enctype="multipart/form-data">
 <tr><td><label>agency code</label>
      <input type="number" name="AgencyCode" id="AgencyCode" ></td></tr>
   <tr><td><label>Name</label>
      <input type="text" name="Name" id="Name" placeholder="enter  name"></td></tr>
       <tr><td>
         <i class="fas fa-home"></i>
 <input type="longtext" name="Address" id="Address" placeholder="Address"></td></tr>
<tr><td>
                  <i class="fas fa-phone"></i>
                <input type="number" name="phone_no" id="phone_no" placeholder="enter phone number" required>
               
              </td></tr>
  <tr><td>
   <i class="fas fa-envelope"></i>
 <input type="text" name="Email" id="Email" placeholder="enter your email"></td></tr>
 
        
     <tr align="center"><td><input type="reset" name="btnReset" value="clear">
    <button type="submit" name="submit" value="submit"><b>submit </b> </tr>
    </form>
</table>


</body>
</html>