<?php
$nameErr= $emailErr= $mobileErr= $genderErr=$websiteErr=  "";
$name= $email= $mobile=$website= $gender= $comment="";
 if( $_SERVER["REQUEST_METHOD"]== "POST"){
   if( empty($_POST["name"])){
     $nameErr= "Name is required";
   }
   else {
     $name= test_input($_POST["name"]);
     if (!preg_match("/^[a-zA-Z]*$/",$name)) {
       $nameErr="Only Letters and white space allowed";
     }
   }
   if (empty($_POST["email"])) {
     $emailErr= "Email is Required";
   }
   else {
     $email= test_input($_POST["email"]);
     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
       $emailErr="Invalid email format";
     }
   }
   if (empty($_POST["mobile"])) {
     $mobileErr= "Mobile Number is required";
   }
   else {
     $mobile=test_input($_POST["mobile"]);
   }
   if(empty($_POST["website"])){
     $websiteErr="Enter Valid URL";
   }
   else {
     $website=test_input($_POST["website"]);
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
   }
 }
   if (empty($_POST["gender"])) {
     $genderErr="Gender FIllup is required";
   }
   else {
     $gender=test_input($_POST["gender"]);
   }
     $comment=test_input($_POST["comment"]);

 }
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
 }
?>
