<!DOCTYPE html>
<html>
<head>
<title>Add Enrollment Record</title>
</head>
<body>

<div align="center">
<h3>Insert Enrollment Data</h3>
<form action="insert.php" method = "post">
<table width=50%>
<tr><td>Recipient ID:</td> 
<td><input type = "text" name = "RecipientID" id = "RecipientID" required></td></tr>
<tr><td>MRN:</td> 
<td><input type = "text" name = "MRN" id="MRN"></td></tr>
<tr><td>Patient ID:</td> 
<td><input type = "text" name = "PatientID" id="PatientID" required></td></tr>
<tr><td>First Name:</td>
<td><input type = "text" name = "First_Name" id="First_Name" required></td></tr>
<tr><td>Middle Name:</td>
<td><input type = "text" name = "Middle_Name" id="Middle_Name"></td></tr>
<tr><td>Last Name:</td>
<td><input type = "text" name = "Last_Name" id="Last_Name" required></td></tr>
<tr><td>Suffix:</td> 
<td><input type = "text" name = "Suffix" id="Suffix"></td></tr>
<tr><td>Gender:</td>
<td><select name = "Gender" id="Gender"><option value="Male">Male</option><option value="Female">Female</option></select></td></tr>
<tr><td>Date of Birth:</td>
<td><input type = "date" name = "DOB" id="DOB" value = "2016-01-01" required></td></tr>
<tr><td>Language:</td>
<td><select name = "Language" id="Language"><option value="English">English</option><option value="Spanish">Spanish</option><option value = "">Null</option> </td></tr>
<tr><td>Race Ethnicity:</td> 
<td><select name = "Race_Ethnicity" id="Race_Ethnicity"><option value = "Unknown">Unknown</option><option value="Black or African American">Black or African American</option><option value="Two or More Race/Ethnicity Designations">Two or More Race/Ethicity Designations</option><option value="Hispanic or Latino">Hispanic or Latino</option><option value="White">White</option><option value="Asian">Asian</option><option value="American Indian/Alaska native">American Indian/Alaska Native</option><option selected ="selected" value="null">Null</option></select></td></tr>
<tr><td>Passport Phone Number:</td> 
<td><input type = "text" name = "Passport_Phone_Number" id="Passport_Phone_Number" required></td></tr>
<tr><td>Medicaid Eligible:</td> 
<td><select name = "Medicaid_Eligible" id="Medicaid_Eligible"><option value="Eligible">Eligible</option><option value="Ineligible">Ineligible</option><option value="No Info">No Info</option></select></td></tr>
<tr><td>MCO Name:</td> 
<td><select name = "MCO_Name" id="MCO_Name"><option value="Country Care">Country Care</option><option value="Straight Medicaid">Straight Medicaid</option><option selected ="selected" value="Harmony">Harmony</option><option value="Blue Cross Blue Shield">Blue Cross Blue Shield</option><option value="UI Health Plus">UI Health Plus</option><option value="Meridian">Meridian</option><option value="FHN">FHN</option><option value="Other">Other</option><option value="IlliniCare">IlliniCare</option><option selected ="selected" value= "">Null</option></select></td></tr>
<tr><td>MCO Plan:</td> 
<td><input type = "text" name = "MCO_Plan" id="MCO_Plan"></td></tr>
<tr><td>Address:</td> 
<td><input type = "text" name = "Address" id="Address" required></td></tr>
<tr><td>City:</td> 
<td><input type = "text" name = "City" id="City" required></td></tr>
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
<td><input type = "text" name = "Zip_Code" id="Zip_Code" required></td></tr>
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
<td><input type = "Date" name = "Initial_Enrollment_Date" id="Initial_Enrollment_Date" required></td></tr>
<tr><td>Engagement Date:</td> 
<td><input type = "Date" name = "Engagement_Date" id="Engagement_Date"></td></tr>
<tr><td>Most Recent Enrollment Date:</td> 
<td><input type = "Date" name = "Most_Recent_Enrollment_Date" id="Most_Recent_Enrollment_Date" default = NULL></td></tr>
<tr><td>Most Recent Disenrollment Date:</td> 
<td><input type = "Date" name = "Most_Recent_Disenrollment_Date" id="Most_Recent_Disenrollment_Date" default = NULL></td></tr>
<tr><td>Disenrollment Type:</td> 
<td><select name = "Disenrollment_Type" id="Disenrollment_Type"><option value="Hard to Reach">Hard to Reach</option><option value="Ineligible">Ineligible</option><option value="Opted Out">Opted Out</option><option value="Incarcerated">Incarcerated</option><option value="Deceased">Deceased</option><option value="Moved out of state">Moved out of state</option><option value="On-hold">On-hold</option><option selected ="selected" value="">Null</option></select></td></tr>
</table><br>
<br>
<input type="submit" value="Insert"><br><br>
</form>
<form action="index.php" mehtod="post">
<input type="submit" value="Back">
</form>
</div>



</body>
</html>