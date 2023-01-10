<!DOCTYPE html>
<html><?php
   require('session.php'); 
    ?>
<head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></head>
<body bgcolor="lightyellow">

<h2 align="center">REFERENCE FORM</h2>

<table border="3" align="center" cellspacing="5" cellpadding="6">
<form action="referenceprocess.php" method="POST" >

 <tr><td><label>parent_id </label>
 <input type="number" name="Parent_id" id="Parent_id"></td></tr>
  
<tr>
  <td><label>Name</label>
  <input type="text" name="Name" id="Name"></td></tr>
  <tr><td><label>Designation</label>
  <input type="text" name="Designation" id="Designation"></td></tr>
  <tr><td>
         <i class="fas fa-home"></i>
 <input type="longtext" name="Address" id="Address" placeholder="Address"></td></tr>
<tr><td>
                  <i class="fas fa-phone"></i>
                <input type="number" name="Phone_no" id="Phone_no" placeholder="enter phone number" required>
               
              </td></tr>
  <tr><td><label>Aadhar no</label>
  <input type="number" name="Adhar_No" id="Adhar_No"></td></tr>

  
  <tr align="center"><td><input type="reset" name="btnReset" value="clear">
    <button type="submit" name="submit" value="submit"><b>submit </b> </tr>
</form>

</table>

</body>
</html>