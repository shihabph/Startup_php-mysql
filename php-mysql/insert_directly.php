<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="employee";

$conn= new mysqli($host, $dbusername, $dbpassword, $dbname) or die(mysqli_error("Connect error"));
echo "Connected<br>";

$sql="INSERT INTO empInfo Values('','{$_POST['name']}' ,'{$_POST['eid']}','{$_POST['mob']}')";
mysqli_query($conn, $sql);

if($conn->query($sql)){
    echo "New record is Inserted Successfully";
}
else{
    echo "Error:" .$sql."<br>".$conn->error;

?>
