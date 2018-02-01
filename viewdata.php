<!DOCTYPE html>
<html>
<head>
<title>Enrollment Details</title>
</head>
<div align="center">
<h3>Enrollment Details</h3>
<body>
<?php

require 'connection.php';
$conn = Connect();

$id = $conn->real_escape_string($_POST['RecipientID']);
$query = "SELECT * FROM CHECK_Enrollment_DB.tbl_enrollment_backup where RecipientID = '$id'";
$result = mysqli_query($conn,$query) or die (mysql_error());

while($row = mysqli_fetch_array($result)){
?>

<form action="index.php" method="post">
<table width=50%>
<tr><td>Recipient ID:</td> 
<td><input type = "text" name = "RecipientID" value="<?php echo $row['RecipientID']; ?>" readonly></td></tr>
<tr><td>MRN:</td> 
<td><input type = "text" name = "MRN" value="<?php echo $row['MRN']; ?>" readonly></td></tr>
<tr><td>Patient ID:</td> 
<td><input type = "text" name = "PatientID" value="<?php echo $row['PatientID']; ?>" readonly></td></tr>
<tr><td>First Name:</td>
<td><input type = "text" name = "First_Name" value="<?php echo $row['First_Name']; ?>" readonly></td></tr>
<tr><td>Middle Name:</td>
<td><input type = "text" name = "Middle_Name" value="<?php echo $row['Middle_Name']; ?>" readonly></td></tr>
<tr><td>Last Name:</td>
<td><input type = "text" name = "Last_Name" value="<?php echo $row['Last_Name']; ?>" readonly></td></tr>
<tr><td>Suffix:</td> 
<td><input type = "text" name = "Suffix" value="<?php echo $row['Suffix']; ?>" readonly></td></tr>
<tr><td>Gender:</td>
<td><input type = "text" name = "Gender" value="<?php echo $row['Gender']; ?>" readonly></td></tr>
<tr><td>Date of Birth:</td>
<td><input type = "text" name = "DOB" value="<?php echo $row['DOB']; ?>" readonly></td></tr>
<tr><td>Language:</td> 
<td><input type = "text" name = "Language" value="<?php echo $row['Language']; ?>" readonly></td></tr>
<tr><td>Race Ethnicity:</td> 
<td><input type = "text" name = "Race_Ethnicity" value="<?php echo $row['Race_Ethnicity']; ?>" readonly></td></tr>
<tr><td>Passport Phone Number:</td> 
<td><input type = "text" name = "Passport_Phone_Number" value="<?php echo $row['Passport_Phone_Number']; ?>" readonly></td></tr>
<tr><td>Medicaid Eligible:</td> 
<td><input type = "text" name = "Medicaid_Eligible" value="<?php echo $row['Medicaid_Eligible']; ?>" readonly></td></tr>
<tr><td>MCO Name:</td> 
<td><input type = "text" name = "MCO_Name" value="<?php echo $row['MCO_Name']; ?>" readonly></td></tr>
<tr><td>MCO Plan:</td> 
<td><input type = "text" name = "MCO_Plan" value="<?php echo $row['MCO_Plan']; ?>" readonly></td></tr>
<tr><td>Address:</td> 
<td><input type = "text" name = "Address" value="<?php echo $row['Address']; ?>" readonly></td></tr>
<tr><td>City:</td> 
<td><input type = "text" name = "City" value="<?php echo $row['City']; ?>" readonly></td></tr>
<tr><td>State:</td> 
<td><input type = "text" name = "State" value="<?php echo $row['State']; ?>" readonly></td></tr>
<tr><td>Zip Code:</td> 
<td><input type = "text" name = "Zip_Code" value="<?php echo $row['Zip_Code']; ?>" readonly></td></tr>
<tr><td>Referral:</td> 
<td><input type = "text" name = "Referral" value="<?php echo $row['Referral']; ?>" readonly></td></tr>
<tr><td>Referral Type:</td> 
<td><input type = "text" name = "Referral_Type" value="<?php echo $row['Referral_Type']; ?>" readonly></td></tr>
<tr><td>Initial Enrollment Date:</td> 
<td><input type = "text" name = "Initial_Enrollment_Date" value="<?php echo $row['Initial_Enrollment_Date']; ?>" readonly></td></tr>
<tr><td>Engagement Date:</td> 
<td><input type = "text" name = "Engagement_Date" value="<?php echo $row['Engagement_Date']; ?>" readonly></td></tr>
<tr><td>Most Recent Enrollment Date:</td> 
<td><input type = "text" name = "Most_Recent_Enrollment_Date" value="<?php echo $row['Most_Recent_Enrollment_Date']; ?>" readonly></td></tr>
<tr><td>Most Recent Disenrollment Date:</td> 
<td><input type = "text" name = "Most_Recent_Disenrollment_Date" value="<?php echo $row['Most_Recent_Disenrollment_Date']; ?>" readonly></td></tr>
<tr><td>Disenrollment Type:</td> 
<td><input type = "text" name = "Disenrollment_Type" value="<?php echo $row['Disenrollment_Type']; ?>" readonly></td></tr>
</table><br>

<input type = "submit" name = "submit" value="Back">

</form>
</div>
<?php
}
?>

</body>
</html>