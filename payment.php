<!DOCTYPE html>
<html>
<body bgcolor="lightyellow">
<h2 align="center">payments details</h2>
<table border="3" align="center" cellspacing="5" cellpadding="6">
<form action="paymentprocess.php" method="POST" enctype="multipart/form-data">
<tr><td><label>Trasaction id</label>
	<input type="number" name="Transaction_id" id="Transaction_id"></td></tr>
	<tr><td><label>parent id</label>
	<input type="number" name="Parent_id" id="Parent_id"></td></tr>

	<tr><td><label>Amount</label>
	<input type="number" name="Payment_Amt" id="Payment_Amt"></td></tr>
	<tr><td><label>trasaction date</label>
	<input type="date" name="Payment_Date" id="Payment_Date"></td></tr>
	<tr><td><label>payment mode :</label>
	Cash <input type="radio" value="C" name="Payment_mode" checked>
	online mode<input type="radio" value="OT" name="Payment_mode"></td></tr>
	
  <tr align="center"><td><input type="reset" name="btnReset" value="clear">
    <button type="submit" name="submit" value="submit"><b>submit </b> </tr>
</form></table></body></html>