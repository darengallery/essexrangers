<?php

$form_name = $_POST['form_name'];
$form_playersName = $_POST['form_playersName'];
$form_playersSchoolYear = $_POST['form_playersSchoolYear'];
$form_playersSchool = $_POST['form_playersSchool'];
$form_dob = $_POST['form_dob'];
$form_address = $_POST['form_address'];
$form_postcode = $_POST['form_postcode'];
$form_homePhone = $_POST['form_homePhone'];
$form_contactPhone = $_POST['form_contactPhone'];
$form_email = $_POST['form_email'];
$form_medical = $_POST['form_medical'];
$form_message = $_POST['form_message'];
$optradio = $_POST['optradio'];

$formcontent="From: $form_name \n Players Name: $form_playersName \n  PLayers School Year: $form_playersSchoolYear \n Players date-of-Birth: $form_dob \n Address: $form_address \n Postcode: $form_postcode \n Home Phone: $form_homePhone \n Contact Phone: $contactPhone \n Email Address: $form_email \n Medical Information: $medical \n Any Other Information: $message \n First Aid: $optradio";

$recipient = "daren_gallery@hotmail.com";
$subject = "Contact Form";
$mailheader = "From: $form_email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
exit;
?>


