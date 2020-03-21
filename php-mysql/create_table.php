<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="employee";

$conn= new mysqli($host, $dbusername, $dbpassword, $dbname) or die(mysqli_error("Connect error"));
echo "Connected";

$sql="Create table empInfo(
  emp_id int auto_increment primary key, name char(50) not null, email varchar(50) not null,
  mobile bigint not null
  )";
  if(mysqli_query($conn, $sql)){
    echo "Table Created Successfully";
  }
  else{
    echo "Error Creating Table".mysqli_error();
  }
 ?>
