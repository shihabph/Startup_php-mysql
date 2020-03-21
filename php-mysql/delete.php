<?php

/*DELETE FROM table_name
WHERE some_column = some_value*/

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="employee";

$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
if($conn->connect_error){
  die("Connection Failed".$conn->connect_error);
}
$sql= "DELETE FROM empinfo WHERE emp_id=16";
if(mysqli_query($conn,$sql)){
  echo "Record Deleted Successfully";
}
else{
  echo "Error Deleting Record".mysqli_error($conn);
}
mysqli_close($conn);

 ?>
