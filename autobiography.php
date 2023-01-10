<!DOCTYPE html>
<html>
<body bgcolor="lightyellow">
<h2 align="center"> Other's Details in Your Family</h2>
<table border="3" align="center" cellspacing="5" cellpadding="6">
<form action="autobiographyprocess.php" method="POST" enctype="multipart/form-data">

  
<tr><td>
	<label>Name:</label>
    <input type="text" name="Name" id="Name">
    <label>Date of birth</label>
    <input type="date" value="dob" name="dob" >
</td></tr>

<tr><td>
    <label>Education:</label>
    SSLC<input type="radio" value="sslc" name="Education" checked>
    PUC<input type="radio" value="puc" name="Education" >
    UG<input type="radio" value="UG" name="Education">
    PG<input type="radio" value="double degree" name="Education">
    Higher<input type="radio" value="higherstudy" name="Education">
</td></tr> 

<tr><td>
	<label>Occupation:</label>
    <input type="text" name="Occupation" id="Occupation">
</td></tr>

<tr><td>
	<label>Marital Status:</label>
    Single<input type="radio" value="S" name="Marital_status" checked >
    Married<input type="radio" value="M" name="Marital_status" >
</td></tr>  
<tr><td><label>residency:</label>
    <input type="text" name="current_residency" id="current_residency">

	
</td></tr>


<tr><td>
    <label for="Relationship">Relation type:</label>
    <select name="relation_type" id="relation_type">
    <option value="Fath">Father</option>
    <option value="Moth">Mother</option>
    <option value="Youn Bro">Younger Brother</option>
    <option value="Eld Bro">Elder Brother</option>
    <option value="Youn Sis">Younger Sister</option>
    <option value="Eld Sis">Elder Sister</option>
    <option value="GF">Grand Father</option>
    <option value="GM">Grand Mother</option>
    <option value="others">Others</option>
  </select>
</td></tr>

  <tr align="center"><td><input type="reset" name="btnReset" value="clear">
    <button type="submit" name="submit" value="submit"><b>submit </b> </tr>

</form>
</table>
<?php
   require('session.php'); 
    ?>
</body>
</html>
  