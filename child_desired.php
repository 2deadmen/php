<!DOCTYPE html>
<html><?php
   require('session.php'); 
    ?>
<body bgcolor="lightyellow">
<h2 align="center">Child Desired</h2>
<table border="3" align="center" cellspacing="5" cellpadding="6">
<form action="child_desiredprocess.php" method="POST" >
<tr>


<td><label>Parent_id</label>
<input type="number" name="Parent_id" id="Parent_id"></td></tr>

<tr><td><label>Age</label>
<input type="number" value="Age" name="Age" ></td></tr>

<tr><td><label>Gender:</label>
Male<input type="radio"  value="M" name="Gender" checked>
Female<input type="radio" value="F" name="Gender"> </td></tr>

<tr align="center"><td> <input type="reset">
	<input type="submit" name='submit'></td></tr>
</form>
</table>
</body>
</html>