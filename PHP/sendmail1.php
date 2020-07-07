<?php

$name = $_POST['name'];
$playersName = $_POST['playersName'];
$playersSchoolYear = $_POST['playersSchoolYear'];
$playersSchool = $_POST['playersSchool'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$postcode = $_POST['postcode'];
$homePhone = $_POST['homePhone'];
$contactPhone = $_POST['contactPhone'];
$email = $_POST['email'];
$medical = $_POST['medical'];
$message = $_POST['message'];
$optradio = $_POST['optradio'];

$formcontent="From: $name \n Players Name: $playersName \n  PLayers School Year: $playersSchoolYear \n Players date-of-Birth: $dob \n Address: $address \n Postcode: $postcode \n Home Phone: $homePhone \n Contact Phone: $contactPhone \n Email Address: $email \n Medical Information: $medical \n Any Other Information: $message \n First Aid: $optradio";

$recipient = "daren_gallery@hotmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
exit;
?>


