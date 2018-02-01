<!DOCTYPE html>
<html>
<head>
<title>Records Added</title>
</head>
<body>
<?php

require 'connection.php';
$conn = Connect();

$id = mysqli_real_escape_string($conn, $_REQUEST["RecipientID"]);
$mrn = mysqli_real_escape_string($conn, $_REQUEST["MRN"]);
$pid = mysqli_real_escape_string($conn, $_REQUEST["PatientID"]);
$fname = mysqli_real_escape_string($conn, $_REQUEST["First_Name"]);
$mname = mysqli_real_escape_string($conn, $_REQUEST["Middle_Name"]);
$lname = mysqli_real_escape_string($conn, $_REQUEST["Last_Name"]);
$suffix = mysqli_real_escape_string($conn, $_REQUEST["Suffix"]);
$sex = mysqli_real_escape_string($conn, $_REQUEST["Gender"]);
$dob = mysqli_real_escape_string($conn, $_REQUEST["DOB"]);
$language = mysqli_real_escape_string($conn, $_REQUEST["Language"]);
$race = mysqli_real_escape_string($conn, $_REQUEST["Race_Ethnicity"]);
$mobile = mysqli_real_escape_string($conn, $_REQUEST["Passport_Phone_Number"]);
$medelig = mysqli_real_escape_string($conn, $_REQUEST["Medicaid_Eligible"]);
$mconame = mysqli_real_escape_string($conn, $_REQUEST["MCO_Name"]);
$mcoplan = mysqli_real_escape_string($conn, $_REQUEST["MCO_Plan"]);
$address = mysqli_real_escape_string($conn, $_REQUEST["Address"]);
$city = mysqli_real_escape_string($conn, $_REQUEST["City"]);
$state = mysqli_real_escape_string($conn, $_REQUEST["State"]);
$zip = mysqli_real_escape_string($conn, $_REQUEST["Zip_Code"]);
$ref = mysqli_real_escape_string($conn, $_REQUEST["Referral"]);
$reft = mysqli_real_escape_string($conn, $_REQUEST["Referral_Type"]);
$IED = mysqli_real_escape_string($conn, $_REQUEST["Initial_Enrollment_Date"]);
$EngD = mysqli_real_escape_string($conn, $_REQUEST["Engagement_Date"]);
$MRED = mysqli_real_escape_string($conn, $_REQUEST["Most_Recent_Enrollment_Date"]);
$MRDD = mysqli_real_escape_string($conn, $_REQUEST["Most_Recent_Disenrollment_Date"]);
$DisT = mysqli_real_escape_string($conn, $_REQUEST["Disenrollment_Type"]);

$fname = strtoupper($fname);
$mname = strtoupper($mname);
$lname = strtoupper($lname);
$suffix = strtoupper($suffix);
$address = strtoupper($address);
$city = strtoupper($city);
$IED = date("Y-m-d",strtotime($IED));
#$EngD = date("Y-m-d",strtotime($EngD));
#$MRED = date("Y-m-d",strtotime($MRED));
#$MRDD = date("Y-m-d",strtotime($MRDD));

function phone_number_format($number) {
  // Allow only Digits, remove all other characters.
  $number = preg_replace("/[^\d]/","",$number);
 
  // get number length.
  $length = strlen($number);
 
 // if number = 10
 if($length == 10) {
  $number = preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "($1) $2-$3", $number);
 }
  
  return $number;
 
}

$mobile = phone_number_format($mobile);



if(!(strlen($id)==9) || !(is_numeric($id))){
	echo '<script language= "javascript">';
	echo 'alert("Invalid length of RecipientID(9) and RecipientID should contain only numerals")';
	echo '</script>';
}
else if(($mrn <> '') && (!(strlen($mrn)==8))){
	echo '<script language= "javascript">';
	echo 'alert("Invalid length of MRN(8)")';
	echo '</script>';
}
else if($dob > date("Y-m-d")){
	echo '<script language= "javascript">';
	echo 'alert("Invalid date of birth")';
	echo '</script>';
}
else if(!(strlen($zip)==5) || !(is_numeric($zip))){
	echo '<script language= "javascript">';
	echo 'alert("Invalid length of Zip Code(5) and Zip Code should contain only numerals")';
	echo '</script>';
}
else if (($EngD <> '') && ($EngD < $IED)){
	echo '<script language= "javascript">'; 
	echo 'alert("Engagement Date cannot be before the Initial Enrollment Date")';
	echo '</script>';
}
else if (($MRDD == '') && ($DisT <> '')){
	echo '<script language= "javascript">'; 
	echo 'alert("Disenrollment Type should be null for the patients with no recent disenrollment")';
	echo '</script>';
}

else{
$sql = "UPDATE CHECK_Enrollment_DB.tbl_enrollment_backup set First_Name = '$fname', Middle_Name = '$mname', Last_Name = '$lname', Suffix = '$suffix', Gender = '$sex', DOB = '$dob', Language = '$language', Race_Ethnicity = '$race', Passport_Phone_Number = '$mobile', Medicaid_Eligible = '$medelig', MCO_Name = '$mconame', MCO_Plan = '$mcoplan', Address = '$address', City = '$city', State = '$state', Zip_Code = '$zip', Referral = '$ref', Referral_Type = '$reft', Initial_Enrollment_Date = '$IED', Engagement_Date = IF('$EngD'='',NULL,'$EngD'), Most_Recent_Enrollment_Date = IF('$MRED'='','$IED','$MRED'), Most_Recent_Disenrollment_Date = IF('$MRDD'='',NULL,'$MRDD'), Disenrollment_Type = '$DisT' where RecipientID = '$id'";

if(mysqli_query($conn,$sql)){
	echo '<script language= "javascript">'; 
	echo 'alert("Record updated successfully");';
	echo 'window.location = "index.php";';
	echo '</script>';

} else{
	echo "ERROR:  Could not able to execute $sql." .mysqli_error($conn);
}
}

mysqli_close($conn);

?>

<!--<form action="index.php" method="post">
<input type="Submit" value="Back">
</form>-->
</body>
</html>