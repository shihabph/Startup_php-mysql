<?php
#Fetch assoc in simple table
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
$result=$conn->query($sql);

if(mysqli_num_rows($result)>0){
  echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Contact Number</th></tr>";
  while($row=mysqli_fetch_assoc($result)){
    echo "<tr><td>".$row["emp_id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["mobile"]."</td></tr>";
  }
  echo "</table>";

}
else {
  echo "0 Results";
}
$conn->close();
?>
