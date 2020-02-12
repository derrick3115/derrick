<html>
	<head>
	<title>Displaying data from database </title>
	
	</head>
        <body bgcolor="goldblue">
             	<link rel="stylesheet" type="text/css"  href="index.css" media="all">
<style type="text/css">

</style>
</head>
<center>
<div class="fulltable" >
	
	<table width="1000" bgcolor="#1EEEEETTEYHFB">
		<tr>
			<td colspan="3">
					<img src="image/sk.png" width="1100" height="150">

			</td>
			</tr>
	<?php
	// Connect to database server
	$conn=mysqli_connect("127.0.0.1", "root", ""); 
if(!$conn)
{
die ("can not connect".mysqli_error ());
}

	// Select database
	mysqli_select_db($conn,'registrationform');
// SQL query
	$strSQLi = "SELECT * FROM form ";

	// Execute the query (the recordset $rs contains the result)
	$rs = mysqli_query($conn,$strSQLi);
	
	// Loop the recordset $rs
	// Each row will be made into an array ($row) using mysql_fetch_array
        echo '<div id="pfd">';
	echo"<table  border=1>";
	echo"<tr>";
        echo"<th bgcolor='grey'>id</th>";
	echo"<th bgcolor='grey'>first name</th>";
	echo"<th bgcolor='grey'>middle name</th>";
	echo"<th bgcolor='grey'>last name</th>";
	echo"<th bgcolor='grey'>address</th>";
	echo"<th bgcolor='grey'>gender</th>";
        echo"<th bgcolor='grey'>phone</th>";
        echo"<th bgcolor='grey'>email</th>";
        echo"<th bgcolor='grey'>username</th>";
        echo"<th bgcolor='grey'>password</th>";
        echo"<th bgcolor='grey'>EDIT</th>";
          echo"<th bgcolor='grey' width=30px >DELETE</th>";
	echo"</tr>";

	while($row = mysqli_fetch_array($rs)) {

	   // Write the value of the column Name (which is now in the array $row)
	  echo"<tr>";
          echo "<td bgcolor='white'>" .$row['id'] ."</td>" ;
	   echo "<td bgcolor='white'>" .$row['fname'] ."</td>" ;
	  echo "<td bgcolor='white'>" .$row['mname'] ."</td>" ;
	  echo "<td bgcolor='white'>" .$row['lname'] ."</td>" ;
	  echo "<td bgcolor='white'>" .$row['address'] ."</td>";
	  echo "<td bgcolor='white'>" .$row['gender'] ."</td>" ;
          echo "<td bgcolor='white'>" .$row['phone'] ."</td>" ;
          echo "<td bgcolor='white'>" .$row['email'] ."</td>" ;
          echo "<td bgcolor='white'>" .$row['username'] ."</td>" ;
          echo "<td bgcolor='white'>" .$row['password'] ."</td>" ;
          echo "<td><a href='gicumbi.php?id=".$row['id']."'><img src='image/edit.png'width='30' height='40'</a></td>";
          echo "<td width=30><a href='deletereg.php?id=".$row['id']."'><img src='image/delete.png'width='25' height='40' ></td>";
         
  
          
echo"</tr>";
     

	  }
           echo '</table>';
 echo '</div>';
	// Close the database connection
	mysqli_close($conn);
	

	