<?php
// UPDATE table_name SET column1=value1,column2=value2... WHERE column = value

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="employee";

$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
if($conn->connect_error){
  die("connection Failed".$conn->connect_error);
}

$sql="UPDATE empinfo SET name='suddho', mobile=01796568588 WHERE email='aminul@gmail.com'";

if($conn->query($sql)=== TRUE){
  echo "Record Updated Successfully";
}
else{
  echo "Error Updating Record".$conn->error;
}
$conn->close();

?>
