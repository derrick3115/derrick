<?php
// MySQL connection variables
// Server name 
$hostname = "localhost";
// Name of the MySQL database
$database = "log";
// Login mysql user
$username = "root";
// Login mysql password
$password = "";

// Connection String
$conn = mysql_connect($hostname, $username, $password);
// MySQL select database
mysql_select_db($database, $conn);

//registering a login session
if (!isset($_SESSION)) {
  session_start();
}
include("forget.php");
@$id=$_POST['id'];
$username=$_POST['user'];
$password=$_POST['password'];


$insert=mysql_query("insert into loginuser values('$id','$username','$password')")or die('data could not be inserted in the database'.mysql_error());
if($insert)
    echo '<center class=access>please Wait.... <img src="img/load.gif "width=50 height=50></center></center>';
echo "successfuly registered";

echo "<META http-equiv=refresh content=4;URL=index2.php>";

?>
