<?php

	// Connect to database server
	$conn=mysqli_connect("127.0.0.1", "root", ""); 
if(!$conn)
{
die ("can not connect".mysqli_error ());
}

	// Select database
	mysqli_select_db($conn,'reg');
if (isset($_POST['delete'])){
$id=$_POST['id'];
$me1=$_POST['me1'];
$irangamimerere=$_POST['irangamimerere'];
$id1=$_POST['id1'];
$akarere=$_POST['akarere'];
$umurenge=$_POST['umurenge'];
$akagari=$_POST['akagari'];
$umudugudu=$_POST['umudugudu'];
$telefoni=$_POST['telefoni'];
$email=$_POST['email'];
$all1=$_POST['all1'];
$me=$_POST['me'];
$id2=$_POST['id2'];
$akarere2=$_POST['akarere2'];
$umurenge2=$_POST['umurenge2'];
$akagari2=$_POST['akagari2'];
$umudugudu2=$_POST['umudugudu2'];
$telefoni2=$_POST['telefoni2'];
$email2=$_POST['email2'];
$upi=$_POST['upi'];
$intara=$_POST['intara'];
$akarere3=$_POST['akarere3'];
$umurenge3=$_POST['umurenge3'];
$akagari3=$_POST['akagari3'];
$ibisobanuro=$_POST['ibisobanuro'];

 $sqli = "DELETE FROM `form1` WHERE id='$id'";  
   
if(!mysqli_query($conn,$sqli)){
echo"  Data not deleted";
}
else{
	echo" deleted";
}
}

mysqli_close($conn);
?>