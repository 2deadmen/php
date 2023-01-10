
<html>
<body bgcolor="lightyellow"><?php
   require('session.php'); 
    ?>
<h2 align="center"> Enter wife Family Details </h2>
<table border="3" align="center" cellspacing="5" cellpadding="6">
<form action="w_fam_detailsprocess.php" method="POST" enctype="multipart/form-data">


<tr><td>
	<label>Name:</label>
    <input type="text" name="Name" id="Name">
</td></tr>


<tr><td>
    <label for="Relationship">Relation type:</label>
    <select name="relationship" id="relationship">
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
<tr><td>
<label>Age:</label>
    <input type="number" value="Age" name="Age" >
</td></tr>

<tr><td>
	<label>Occupation:</label>
    <input type="text" name="Occupation" id="Occupation">
</td></tr>

<tr><td>
	<label>Living status:</label>
    Living<input type="radio" value="$liv" name="liv_st">
    Expired<input type="radio" value="Ex" name="liv_st">
</td></tr>

  <tr align="center"><td><input type="reset" name="btnReset" value="clear">
    <button type="submit" name="submit" value="submit"><b>submit </b> </tr>

</form>
</table>
</body>
</html>