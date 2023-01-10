<!DOCTYPE html>
<html>
<head>  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></head>
<body bgcolor="lightyellow">
<h2 align="center"> Employement Details of wife</h2>
<table border="3" align="center" cellspacing="5" cellpadding="6">
<form action="w_employement_detprocess.php" method="POST" enctype="multipart/form-data">
<tr><td>
	<label>Parent ID </label>
    <input type="number" name="Parent_id" id="Parent_id">
</td></tr>

<tr><td>
	<label>Occupation:</label>
    <input type="text" name="occupation" id="occupation">
</td></tr>
   <tr><td>
         <i class="fas fa-home"></i>
 <input type="longtext" name="office_address" id="office_address" placeholder="enter office address"></td></tr>



<tr><td>
	<label>Income/Salary </label>
    <input type="number" name="income_salary" id="income_salary">
</td></tr>

  <tr align="center"><td><input type="reset" name="btnReset" value="clear">
    <button type="submit" name="submit" value="submit"><b>submit </b> </tr>

</form>
</table>
</body><?php
   require('session.php'); 
    ?>
</html>