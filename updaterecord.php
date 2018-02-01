<!DOCTYPE html>
<html>
<head>
<title>Edit Enrollment Details</title>
</head>

<body>
<div align = "center">
<h3>Edit Enrollment Details</h3>
<?php

require 'connection.php';
$conn = Connect();

$id = $conn->real_escape_string($_POST['RecipientID']);
$query = "SELECT * FROM CHECK_Enrollment_DB.tbl_enrollment_backup where RecipientID = '$id'";
$result = mysqli_query($conn,$query) or die (mysql_error());

while($row = mysqli_fetch_array($result)){
?>
<form action="update.php" method="post">
<table width=50%>
<tr><td>Recipient ID:</td> 
<td><input type = "text" name = "RecipientID" value="<?php echo $row['RecipientID']; ?>" readonly></td></tr>
<tr><td>MRN:</td> 
<td><input type = "text" name = "MRN" value="<?php echo $row['MRN']; ?>" readonly></td></tr>
<tr><td>Patient ID:</td> 
<td><input type = "text" name = "PatientID" value="<?php echo $row['PatientID']; ?>" readonly></td></tr>
<tr><td>First Name:</td>
<td><input type = "text" name = "First_Name" value="<?php echo $row['First_Name']; ?>" ></td></tr>
<tr><td>Middle Name:</td>
<td><input type = "text" name = "Middle_Name" value="<?php echo $row['Middle_Name']; ?>" ></td></tr>
<tr><td>Last Name:</td>
<td><input type = "text" name = "Last_Name" value="<?php echo $row['Last_Name']; ?>" ></td></tr>
<tr><td>Suffix:</td> 
<td><input type = "text" name = "Suffix" value="<?php echo $row['Suffix']; ?>" ></td></tr>
<tr><td>Gender:</td>
<td><select name = "Gender" id="Gender"><option value="Male">Male</option><option value="Female">Female</option></select></td></tr>
<tr><td>Date of Birth:</td>
<td><input type = "date" name = "DOB" value="<?php echo $row['DOB']; ?>" ></td></tr>
<tr><td>Language:</td> 
<td><select name = "Language" id="Language"><option value="English">English</option><option value="Spanish">Spanish</option><option value = "">Null</option> </td></tr>
<tr><td>Race Ethnicity:</td> 
<td><select name = "Race_Ethnicity" id="Race_Ethnicity"><option value = "Unknown">Unknown</option><option value="Black or African American">Black or African American</option><option value="Two or More Race/Ethnicity Designations">Two or More Race/Ethicity Designations</option><option value="Hispanic or Latino">Hispanic or Latino</option><option value="White">White</option><option value="Asian">Asian</option><option value="American Indian/Alaska native">American Indian/Alaska Native</option><option selected ="selected" value="null">Null</option></select></td></tr>
<tr><td>Passport Phone Number:</td> 
<td><input type = "text" name = "Passport_Phone_Number" value="<?php echo $row['Passport_Phone_Number']; ?>" ></td></tr>
<tr><td>Medicaid Eligible:</td> 
<td><select name = "Medicaid_Eligible" id="Medicaid_Eligible"><option value="Eligible">Eligible</option><option value="Ineligible">Ineligible</option><option value="No Info">No Info</option></select></td></tr>
<tr><td>MCO Name:</td> 
<td><select name = "MCO_Name" id="MCO_Name"><option value="Country Care">Country Care</option><option value="Straight Medicaid">Straight Medicaid</option><option selected ="selected" value="Harmony">Harmony</option><option value="Blue Cross Blue Shield">Blue Cross Blue Shield</option><option value="UI Health Plus">UI Health Plus</option><option value="Meridian">Meridian</option><option value="FHN">FHN</option><option value="Other">Other</option><option value="IlliniCare">IlliniCare</option><option selected ="selected" value= "">Null</option></select></td></tr>
<tr><td>MCO Plan:</td> 
<td><input type = "text" name = "MCO_Plan" value="<?php echo $row['MCO_Plan']; ?>" ></td></tr>
<tr><td>Address:</td> 
<td><input type = "text" name = "Address" value="<?php echo $row['Address']; ?>" ></td></tr>
<tr><td>City:</td> 
<td><input type = "text" name = "City" value="<?php echo $row['City']; ?>" ></td></tr>
<tr><td>State:</td> 
<td><select name = "State" id="State">
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option selected="selected" value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>	</td></tr>
<tr><td>Zip Code:</td> 
<td><input type = "text" name = "Zip_Code" value="<?php echo $row['Zip_Code']; ?>"></td></tr>
<tr><td>Referral:</td> 
<td><select name = "Referral" id="Referral"><option selected="selected" value="Yes">Yes</option><option value="No">No</option></select></td></tr>
<tr><td>Referral Type:</td> 
<td><select name = "Referral_Type" id="Referral_Type">
	<option selected="selected" value = "Sibling">Sibling</option>
	<option value = "">NULL</option>
	<option value = "NICU">NICU</option>
	<option value = "Nurse">Nurse</option>
	<option value = "PCC Wellness">PCC Wellness</option>
	<option value = "Provider">Provider</option>
	<option value = "Dental Event">Dental Event</option>
	<option value = "UIHP">UIHP</option>
	<option value = "School-based clinic">School-based clinic</option>
	<option value = "Specialist">Specialist</option>
	<option value = "Unknown">Unknown</option>
	<option value = "Patient's child">Patient's child</option>
	<option value = "Pharmacist">Pharmacist</option>
	<option value = "Social Worker">Social Worker</option>
	<option value = "Parent">Parent</option>
	<option value = "Lawndale Christian">Lawndale Christian</option></select></td></tr>
<tr><td>Initial Enrollment Date:</td> 
<td><input type = "date" name = "Initial_Enrollment_Date" value="<?php echo $row['Initial_Enrollment_Date']; ?>" ></td></tr>
<tr><td>Engagement Date:</td> 
<td><input type = "date" name = "Engagement_Date" value="<?php echo $row['Engagement_Date']; ?>" ></td></tr>
<tr><td>Most Recent Enrollment Date:</td> 
<td><input type = "date" name = "Most_Recent_Enrollment_Date" value="<?php echo $row['Most_Recent_Enrollment_Date']; ?>" ></td></tr>
<tr><td>Most Recent Disenrollment Date:</td> 
<td><input type = "date" name = "Most_Recent_Disenrollment_Date" value="<?php echo $row['Most_Recent_Disenrollment_Date']; ?>"></td></tr>
<tr><td>Disenrollment Type:</td> 
<td><select name = "Disenrollment_Type" id="Disenrollment_Type"><option value="Hard to Reach">Hard to Reach</option><option value="Ineligible">Ineligible</option><option value="Opted Out">Opted Out</option><option value="Incarcerated">Incarcerated</option><option value="Deceased">Deceased</option><option value="Moved out of state">Moved out of state</option><option value="On-hold">On-hold</option><option selected ="selected" value="">Null</option></select></td></tr>
</table><br>
<input type = "Submit" name = "update" value="Update">

</form>
<?php


}



?>
<br>

<form action="index.php" method="post">
<input type="Submit" value="Back">

</form>
</div>

</body>
</html>