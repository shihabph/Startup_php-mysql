<?php
$name= $email= $gender= $mobile =$comment="";

if ($_SERVER["REQUEST_METHOD"]== "POST") {
  $name= test_input($_POST["name"]);
  $email=test_input($_POST["email"]);
  $mobile=test_input($_POST["mobile"]);
  $gender=test_input($_POST["gender"]);
  $comment=test_input($_POST["comment"]);
}
function test_input($data){
  $data= trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}
 ?>
