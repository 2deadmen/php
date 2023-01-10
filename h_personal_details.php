<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></head>
<body bgcolor="lightyellow">
<h2 align="center">Enter husbands personal details</h2>
<table border="3" align="center" cellspacing="5" cellpadding="6">
<form action="h_personal_detailsprocess.php" method="POST" enctype="multipart/form-data">
<tr>
<td><label>Parent_id  </label>
  <input type="number" name="Parent_id" id="Parent_id">
  <label>Name  </label>
  <input type="text" name="HName" id="HName"></td></tr>
    <tr><td><label>DOB  </label>
  <input type="date" name="DOB" id="DOB"></td></tr>
  <tr><td>
         <i class="fas fa-home"></i>
 <input type="longtext" name="address" id="address" placeholder="Address"></td></tr>
<tr><td>
                  <i class="fas fa-phone"></i>
                <input type="number" name="Phone_No" id="Phone_No" placeholder="enter phone number" required>
               
              </td></tr>
  <tr><td><label> Education  </label>
    <input type="text" name="Education" id="Education"></td></tr>

  <tr><td><label>religion  </label>
    <input type="text" name="Religion" id="Religion">
    <label>Mothertounge:</label>
  <select name="Mothertongue" id="Mothertongue">
    <option value="EN">English</option>
    <option value="HI">Hindi</option>
    <option value="KA">Kannada</option>
    <option value="KO">Konkani</option>
    <option value="MAL">Malayalam</option>
    <option value="MAR">Marathi</option>
    <option value="TAM">Tamil</option>
    <option value="TEL">Telugu</option>
    <option value="TU">Tulu</option>
    <option value="UR">Urdu</option>
  </select></td></tr>
 
    <tr><td><label>marriage_date  </label>
  <input type="date" name="Marriage_Date" id="Marriage_Date"></td></tr>
    <tr><td><label>marriage place  </label>
  <input type="text" name="Marriage_Place" id="Marriage_Place"></td></tr>
    <tr><td><label>marriage doc  </label>
  <input type="file" name="marriagedoc" required id="marriagedoc"></td></tr>
    <tr><td><label>pan card  </label>
  <input type="file" name="PAN_card" required id="PAN_card"></td></tr>
    <tr><td><label>adharcard  </label>
  <input type="file" name="Adhar_card" required id="Adhar_card"></td></tr>
   <tr><td><label>medical certificate  </label>
  <input type="file" name="Medical_cer" required id="Medical_cer"></td></tr>
   <tr><td><label>passbook  </label>
  <input type="file" name="Bank_Details" required id="Bank_Details"></td></tr>
   <tr><td><label>signature  </label>
  <input type="file" name="Signature" required id="Signature"></td></tr>
  <tr align="center"><td><input type="reset" name="btnReset" value="clear">
    <button type="submit" name="submit" value="submit"><b>submit </b> </tr>
</form> 

</table>

</body>
<?php
   require('session.php'); 
    ?>
</html>