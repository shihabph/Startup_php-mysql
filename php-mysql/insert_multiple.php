<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="employee";

$conn= new mysqli($host, $dbusername, $dbpassword, $dbname);
if($conn->connect_error){
  die("Connection Failed".$conn->connect_error);
}
$sql= "INSERT into empinfo(name,email,mobile) VALUES('faysal', 'faysal@gmail.com', 01749000926);";
$sql.= "INSERT into empinfo(name,email,mobile) VALUES('shuvo', 'shuvo@gmail.com', 01749088926);";
$sql.= "INSERT into empinfo(name,email,mobile) VALUES('mehedi', 'Mehedi@gmail.com', 01741234926)";

if($conn->multi_query($sql)===TRUE){
  echo "New Records Inserted Successfully";
}
else{
  echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
?>
