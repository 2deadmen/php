<!DOCTYPE html>
<html><?php
   require('session.php'); 
    ?>
<body bgcolor="lightyellow">
<h2 align="center">Enter your child details</h2>
<table border="3" align="center" cellspacing="5" cellpadding="6">
<form action="child_infoprocess.php" method="POST" enctype="multipart/form-data">

  
  <tr><td><label>Name:  </label>
 <input type="text" name="Name" id="Name">
  <tr><td><label>Gender:</label>
    Male<input type="radio" value="M" name="Gender" checked>
    Female<input type="radio" value="F" name="Gender" checked>
    Other<input type="radio" value="O" name="Gender"></td></tr>
   <tr>
    <td>
      <label>Age:</label>
      <input type="number" name="Age" id="Age"></td></tr>
      <tr><td><label>Bio/Adopted : </label>
         Bio<input type="radio" value="Bio" name="Bio_Adopted" checked>
        Adopted<input type="radio" value="Adopt" name="Bio_Adopted" checked>

  <tr align="center"><td><input type="reset" name="btnReset" value="clear">
    <button type="submit" name="submit" value="submit">submit </button> &nbsp;<a href="h_fam_details.php" >skip</a>
   </tr>
  <tr>   
</tr>
    </form>
</table>

</body>
</html>