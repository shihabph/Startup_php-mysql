<?php
#Fetch assoc using where clause
//SELECT column_name(s) FROM table_name WHERE column_name operator value

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="employee";

$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
if($conn->connect_error){
  die("Connection Failed".$conn->connect_error);
}
$sql="SELECT emp_id, name, email FROM empinfo WHERE mobile='01710382919'";
$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
    echo "ID: ".$row["emp_id"]."--Name: ".$row["name"]."--Email: ".$row["email"]."<br>";
  }
}else {
  echo "No results";
}
mysqli_close($conn);
?>
