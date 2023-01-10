<!DOCTYPE html>
<html>
<body bgcolor="lightyellow">
<h2 align="center">provide other documents</h2>
<table border="3" align="center" cellspacing="5" cellpadding="6">
<form action="other_docsprocess.php" method="POST" enctype="multipart/form-data">

<tr><td><label>Affidivit letter</label>
  <input type="file"  required name="affidivit_letter" id="affidivit_letter"></td></tr>
  <tr><td><label>undertaking letter</label>
  <input type="file" required name="Undertaking_Letter" id="Undertaking_Letter"></td></tr>
  <tr><td><label>property declaration</label>
  <input type="file" required name="Property_declaration" id="Property_declaration"></td></tr>
   <tr><td><label>family photo</label>
  <input type="file" required name="Family_photo" id="Family_photo"></td></tr>
   <tr><td><label>marriage certificate</label>
  <input type="file" required name="marriage_certificate" id="marriage_certificate"></td></tr>
  
  <tr align="center"><td><input type="reset" name="btnReset" value="clear">
    <button type="submit" name="submit" value="submit"><b>submit </b> </tr>
</form>
</table>
</body>
<?php
   require('session.php'); 
    ?></html>