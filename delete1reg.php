<?php

	// Connect to database server
	$conn=mysqli_connect("127.0.0.1", "root", ""); 
if(!$conn)
{
die ("can not connect".mysqli_error ());
}

	// Select database
	mysqli_select_db($conn,'lms');

 $id = $_GET['id'];

 $sqli = "DELETE FROM form1 WHERE id = $id" ; 
   
if(!mysqli_query($conn,$sqli)){
print "<script>alert('Not deleted')</script>";
}
else{
	print "<script>alert('Sucess deleted')</script>";
        header("location:view1reg.php");
}
//}

mysqli_close($conn);
?>