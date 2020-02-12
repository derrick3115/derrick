<?php 

	// Connect to database server
	$conn=mysqli_connect("127.0.0.1", "root", ""); 
if(!$conn)
{
die ("can not connect".mysqli_error ());
}

	// Select database
	mysqli_select_db($conn,'log');
	if (isset($_POST['update'])){
	$id = $_POST['id'];
	$del=mysql_query("DELETE FROM `loginuser` WHERE id='$id'");
}


header("location:viewuser.php");
mysqli_close($conn);

?>