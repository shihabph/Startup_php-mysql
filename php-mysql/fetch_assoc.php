<?php
#Fetch assoc in simple text
//SELECT column_name(s) FROM table_name
//SELECT * FROM table_name

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="employee";

$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
if($conn->connect_error){
  die("Connection Failed".$conn->connect_error);
}

$sql="SELECT emp_id,name,email,mobile FROM empinfo";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
    echo"Emploee ID:".$row["emp_id"]."-Name:".$row["name"]."-Email:".$row["email"]."-Mobile".$row["mobile"]."<br><br>";
  }
}
else{
  echo "O results";
}
mysqli_close($conn);
?>
