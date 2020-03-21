<?php

/*INSERT INTO table_name (column1, column2, column3,...)
VALUES (value1, value2, value3,...)*/

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="employee";

$conn= new mysqli($host, $dbusername, $dbpassword, $dbname) or die(mysqli_error("Connect error"));

$name=$_POST['name'];
$eid=$_POST['eid'];
$mob=$_POST['mob'];

$sql="INSERT INTO empInfo(emp_id,name,email,mobile) Values('', '$name','$eid','$mob')";
mysqli_query($conn,$sql);


if($conn->query($sql)){
    echo "New record is Inserted Successfully";
}
else{
    echo "Error:" .$sql."<br>".$conn->error;
}
$conn->close();

 ?>
