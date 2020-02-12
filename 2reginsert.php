<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "1reg";

// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
   
}
// MySQL select database
mysql_select_db($dbname, $conn);

//registering a login session
if (!isset($_SESSION)) {
  session_start();
}
include("1reg.php");
$me1=$_POST['me1'];
$irangamimerere=$_POST['irangamimerere'];
$id1=$_POST['id1'];
$akarere=$_POST['akarere'];
$umurenge=$_POST['umurenge'];
$akagari=$_POST['akagari'];
$umudugudu=$_POST['umudugudu'];
$telefoni=$_POST['telefoni'];
$email=$_POST['email'];
$upi1=$_POST['upi1'];
$upi2=$_POST['upi2'];
$upi3=$_POST['upi3'];
$intara=$_POST['intara'];
$akarere3=$_POST['akarere3'];
$umurenge3=$_POST['umurenge3'];
$akagari3=$_POST['akagari3'];
$ibisobanuro=$_POST['ibisobanuro'];

$sql = "INSERT INTO form1 (me1,irangamimerere,id1,akarere,umurenge,akagari,umudugudu,telefoni,email,upi1,upi2,upi3,intara,akarere3,umurenge3,akagari3,ibisobanuro)
VALUES ('$me1','$irangamimerere,'$id1','$akarere','$umurenge','$akagari','$umudugudu','$telefoni','$email','$upi1','$upi2','$upi3','$intara','$akarere3','$umurenge3','$akagari3','$ibisobanuro')";

if ($conn->query($sql)==TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysql_close($conn);
?>
