<!DOCTYPE html>
<html>
<body bgcolor="lightyellow">
<h2 align="center">questionires</h2>
<table border="3" align="center" cellspacing="5" cellpadding="6">

<form action="Questionaries_process.php" method="POST" enctype="multipart/form-data">
  

  
<tr><tr><td><label><b>01.Your Home No. of rooms amenities:</label>
  <textarea name='Rooms_in_Home' cols="45" rows="3"></textarea></td></tr>
   <tr><td><label><b>02.What do you do your spare time?</label>
  <textarea name='Spare_Time' cols="45" rows="3"></textarea></td></tr>
  <tr><td><label><b>03.Do you have  help at home?</label>
  <textarea name='Help_at_Home' cols="45" rows="3"></textarea></td></tr>
  <tr><td><label><b>04.What are the strong points of your marriage?</label>
  <textarea  name='Strng_pnts_Mrg' cols="45" rows="3"></textarea></td></tr>
  <tr><td><label><b>05.Why do you want to adapt?</label>
  <textarea name='Decision_for_Adopt' cols="45" rows="3"></textarea></td></tr>
 
  <tr><td><label><b>07.Do both of you wish to adopt a child?</label>
  <textarea  name='Both_wish_Adopt' cols="45" rows="3"></textarea></td></tr>
  <tr><td><label><b>08.Do you families know of your decision to adopt?</label>
  <textarea  name='Fam_Decision' cols="45" rows="3"></textarea></td></tr>
  <tr><td><label><b>09.If yes, what was their reaction?</label>
  <textarea name='Fam_Reaction' cols="45" rows="3"></textarea></td></tr><br>
  <tr><td><label><b>10.If No, what are your reasons for not doing so?</label>
  <textarea cols="45" name='ifNo_Reason' rows="3"></textarea></td></tr>
  <tr><td><label><b>11.What are your special strengths that will help you to parent a child?</label>
  <textarea cols="45" name='Strength_as_Parent' rows="3"></textarea></td></tr>
  <tr><td><label><b>13.What child care arrangements will you make in your absence?</label>
  <textarea cols="45"  name='ChildeCare_Absence' rows="3"></textarea></td></tr>
  <tr><td><label><b>14.Will you legalize the adoption/ guardianship of the child</label>
  <textarea cols="45" name='Legal_Adopt' rows="3"></textarea></td></tr>
  <tr><td><label><b>15.Who introduced you to your organization?</label>
  <textarea cols="45" name='Introducer' rows="3"></textarea></td></tr>
  <tr><td><label><b>16.Any other information that you may want to give?</label>
  <textarea cols="45" name='Other_Details' rows="3"></textarea></td></tr>
  
  <tr align="center"><td><input type="reset" name="btnReset" value="clear">
    <button type="submit" name="submit" value="submit"><b>submit </b> </tr>



</form></table></body>
<?php
   require('session.php'); 
    ?></html>