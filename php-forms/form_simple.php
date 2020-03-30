<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="employee";

$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
if($conn->connect_error){
  die("COnnection Failed".$conn->connect_error);
}

$sql="INSERT INTO empInfo(name,email,mobile) VALUES('','','')";
mysqli_query($conn,$sql);

if($conn->query($sql)){
  echo"Welcome "; echo $_POST["name"];
  echo"<br>Your Email Address is:";
  echo $_POST["email"];
}
else{
  echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
 ?>
