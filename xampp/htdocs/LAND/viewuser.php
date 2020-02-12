<html>
	<head>
	<title>Displaying data from database </title>
	<link rel="icon" type="image/png" href="img/lms2.png">
	</head>
	<body bgcolor="goldblue">
        <center><h1>Abaturage</h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="usersearch.php"><img src="img/search.jpg"></a>
                    

	<?php
	// Connect to database server
	$conn=mysqli_connect("127.0.0.1", "root", ""); 
if(!$conn)
{
die ("can not connect".mysqli_error ());
}

	// Select database
	mysqli_select_db($conn,'log');
// SQL query
	$strSQLi = "SELECT * FROM loginuser";

	// Execute the query (the recordset $rs contains the result)
	$rs = mysqli_query($conn,$strSQLi);
	
	// Loop the recordset $rs
	// Each row will be made into an array ($row) using mysql_fetch_array
        echo '<div align="center">';
	echo"<table border=1>";
	echo"<tr>";
        echo"<th bgcolor='grey'>ID</th>";
	echo"<th bgcolor='grey'>username</th>";
	echo"<th bgcolor='grey'>password</th>";
    echo"<th bgcolor='grey'>EDIT</th>";
    echo"<th bgcolor='grey'>DELETE</th>";
	echo"</tr>";

	while($row = mysqli_fetch_array($rs)) {

	   // Write the value of the column Name (which is now in the array $row)
	  echo"<tr>";
          echo "<td bgcolor='white'>" .$row['id'] ."</td>" ;
	   echo "<td bgcolor='white'>" .$row['username'] ."</td>" ;
	  echo "<td bgcolor='white'>" .$row['password'] ."</td>" ;
	  echo "<td><a href='updateuser.php'><img src='img/update.jpg'width='90' height='40'</a></td>";
          echo "<td><a href='deluser.php'><img src='img/delete.jpg'width='90' height='40' ></td>";
         
  
          
echo"</tr>";
      echo '</div>';

	  }

	// Close the database connection
	mysqli_close($conn);
	?>
                    
	</body>
	</html>
        