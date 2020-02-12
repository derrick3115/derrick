<?php
// Connect to database server
   $servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysql_connect($servername, $username, $password) or die(mysql_error());
// select db
mysql_select_db("log",$conn) or die(mysql_error());
$resultSet = mysql_query("insert into customer ",$conn);

if (!$conn)
{
    die ('can not connect:'. mysql_error ());
}
if (isset($_POST['update'])){
$id=$_POST['id'];
$Firstname =$_POST['username'];
$Lastname =$_POST['password'];

 $sql = "UPDATE loginuser SET username='$username',password='$password' WHERE id='$id'";  
   
if(mysql_query($conn,$sql)){
}else{
echo"not updated";
}
}
mysql_close($conn);
?>