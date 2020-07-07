<?php

$playersFirstName = $_POST['playersFirstName'];
$playersLastName = $_POST['playersLastName'];
$dob = $_POST['dob'];
$playersSchool = $_POST['playersSchool'];
$playersSchoolAddress = $_POST['playersSchoolAddress'];
$playersSchoolPostcode = $_POST['playersSchoolPostcode'];
$playersSchoolYear = $_POST['playersSchoolYear'];
$playersHomeAddress = $_POST['playersHomeAddress'];
$playersHomePostcode = $_POST['playersHomePostcode'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$relationship = $_POST['relationship'];
$homeAddress = $_POST['homeAddress'];
$homePostcode = $_POST['homePostcode'];
$homePhone = $_POST['homePhone'];
$mobilePhone = $_POST['mobilePhone'];
$email = $_POST['email'];
$medical = $_POST['medical'];
$message = $_POST['message'];
$optradio = $_POST['optradio'];

$formcontent="$firstName \n Players First Name: $playersFirstName \n PLayers Last Name: $playersLastName \n Players date-of-Birth: $dob \n Players School:  $playersSchool \n Players School Address: $playersSchoolAddress \n Players School postcode: $playersSchoolPostcode \n Players School Year: $playersSchoolYear \n Players Home Address: $playersHomeAddress \n Players Home Postcode: $playersHomePostcode \n First Name: $fistNname \n Last Name: $lastName \n Relationship to player: $relationship \n Home Address: $homeAddress \n Home Postcode: $homePostcode \n Home Phone: $homePhone \n Mobile Phone: $mobilePhone \n Email Address: $email \n Medical: $medical \n Message: $message \n First Aid: $optradio";

$recipient = "daren_gallery@hotmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
exit;
?>


