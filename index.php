<!DOCTYPE html>
<html>
<head>
<title>Enrollment Data</title>
</head>
<body>
<div align="center">
<h3>Enrollment form</h3>
<form name = f1 action= "../viewdata.php" method = "post">
	Enter the Recipient ID to view or update the record<br><br>
	<input type = "text" name = "RecipientID" required><br><br>

	<input type = "submit" value = "View">
	<input type = "submit" value = "Update Record" onClick="f1.action='../updaterecord.php'; return true;"><br><br>
		
</form>


<br>
<form action="../insertdata.php" method= "post">
	<input type = "submit" value = "Insert New Record">
</form>
</div>


</body>
</html>
