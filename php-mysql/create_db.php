<?php
$host= "localhost";
$dbusername= "root";
$dbpassword= "";
//connecting database
$conn=new mysqli($host, $dbusername, $dbpassword);

if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_errno());
}
else {
  echo "Connect Successfully";
}

// Creating database
$sql="Create database employee";
if(mysqli_query($conn,$sql)){
  echo"Database Created Successfully";
}
else{
  echo "Error Creating Database:".mysqli_error();
}


 ?>
