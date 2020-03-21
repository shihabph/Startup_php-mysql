<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="employee";
$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
if($conn->connect_error){
  die("Connection Failed".$conn->connect_error);
}
$stmt=$conn->prepare("INSERT INTO empinfo(name, email,mobile) VALUES(?,?,?)");
$stmt->bind_param("ssi", $name,$email,$mobile);
/// i=integer, d=double, s=string, b=blob

$name="Afsana";
$email="afsana19205@gmail.com";
$mobile="01710382919";
$stmt->execute();

$name="Parvin";
$email="afsana19205@gmail.com";
$mobile="01710382919";
$stmt->execute();

$name="Aite";
$email="afsana19205@gmail.com";
$mobile="01710382919";
$stmt->execute();

echo "New Record Created Successfully";
$stmt->close();
$conn->close();
 ?>
