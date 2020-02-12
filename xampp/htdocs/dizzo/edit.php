<?php

// Connect to database server
   $servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysql_connect($servername, $username, $password) or die(mysql_error());
// select db
mysql_select_db("dizzo",$conn) or die(mysql_error());
$resultSet = mysql_query("insert into customer ",$conn);

if (!$conn)
{
	die ('can not connect:'. mysql_error ());
}
if (isset($_POST['update'])){
$id=$_POST['id'];
$Firstname =$_POST['Firstname'];
$Lastname =$_POST['Lastname'];
$Email =$_POST['Email'];
$Phone =$_POST['Phone'];

 $sql = "UPDATE customer SET Firstname='$Firstname',Lastname='$Lastname',Email='$Email',Phone='$Phone'WHERE id='$id'";  
   
if(mysqli_query($conn,$sql)){
}else{
echo"not updated";
}
}
mysql_close($conn);
?>