<html>
	<head>
	<title>Displaying data from database </title>
	</head>
	<body bgcolor="skyblue">
		<center><h1> Customers Details </h1>

	<?php
	// Connect to database server
	$conn=mysqli_connect("127.0.0.1", "root", ""); 
if(!$conn)
{
die ("can not connect".mysqli_error ());
}

	// Select database
	mysqli_select_db($conn,'dizzo');
// SQL query
	$strSQLi = "SELECT * FROM customer";

	// Execute the query (the recordset $rs contains the result)
	$rs = mysqli_query($conn,$strSQLi);
	
	// Loop the recordset $rs
	// Each row will be made into an array ($row) using mysql_fetch_array
        echo '<div align="center">';
	echo"<table border=1>";
	echo"<tr>";
	echo"<th>Id</th>";
	echo"<th>Firstame </th>";
	echo"<th>Lastame </th>";
	echo"<th>Email </th>";
	echo"<th>Phone </th>";
	echo"</tr>";

	while($row = mysqli_fetch_array($rs)) {

	   // Write the value of the column Name (which is now in the array $row)
	  echo"<tr>";
	   echo "<td>" .$row['Id'] ."</td>" ;
	  echo "<td>" .$row['Firstname'] ."</td>" ;
	  echo "<td>" .$row['Lastname'] ."</td>" ;
	  echo "<td>" .$row['Email'] ."</td>";
	  echo "<td>" .$row['Phone'] ."</td>" ;
  
          
echo"</tr>";
      echo '</div>';

	  }

	// Close the database connection
	mysqli_close($conn);
	?>
                <hr>
                <br>  <a href="update.php">update</a>
                <br><a href="delete.php">delete</a>
	</body>
	</html>
	