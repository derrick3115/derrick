<html>
	<head>
	<title>Displaying data from database </title>
	<link rel="icon" type="image/png" href="img/lms2.png">
	</head>
	<body bgcolor="goldblue">
        <center><h1> Abaturage</h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="1search.php"><img src="img/search.jpg"></a>
                    

	<?php
	// Connect to database server
	$conn=mysqli_connect("127.0.0.1", "root", ""); 
if(!$conn)
{
die ("can not connect".mysqli_error ());
}

	// Select database
	mysqli_select_db($conn,'reg');
// SQL query
	$strSQLi = "SELECT * FROM form1";

	// Execute the query (the recordset $rs contains the result)
	$rs = mysqli_query($conn,$strSQLi);
	
	// Loop the recordset $rs
	// Each row will be made into an array ($row) using mysql_fetch_array
        echo '<div align="center">';
	echo"<table border=1>";
	echo"<tr>";
        echo"<th bgcolor='grey'>ID</th>";
	echo"<th bgcolor='grey'>Njyewe/Twebwe</th>";
	echo"<th bgcolor='grey'>Irangamimerere</th>";
	echo"<th bgcolor='grey'>Indangamuntu/Pasiporo</th>";
	echo"<th bgcolor='grey'>Akarere ka</th>";
	echo"<th bgcolor='grey'>Umurenge wa</th>";
        echo"<th bgcolor='grey'>Akagari ka</th>";
        echo"<th bgcolor='grey'>Umudugudu wa</th>";
        echo"<th bgcolor='grey'>Telefoni</th>";
        echo"<th bgcolor='grey'>E-mail</th>";
        echo"<th bgcolor='grey'>Nimero y'ikibanza/isambu (UPI)</th>";
        echo"<th bgcolor='grey'>Intara</th>";
        echo"<th bgcolor='grey'>Akarere</th>";
        echo"<th bgcolor='grey'>Umurenge</th>";
        echo"<th bgcolor='grey'>Akagari</th>";
        echo"<th bgcolor='grey'>Ibisobanuro</th>";
         echo"<th bgcolor='grey'>EDIT</th>";
          echo"<th bgcolor='grey'>DELETE</th>";
	echo"</tr>";

	while($row = mysqli_fetch_array($rs)) {

	   // Write the value of the column Name (which is now in the array $row)
	  echo"<tr>";
          echo "<td bgcolor='white'>" .$row['id'] ."</td>" ;
	   echo "<td bgcolor='white'>" .$row['me1'] ."</td>" ;
	  echo "<td bgcolor='white'>" .$row['irangamimerere'] ."</td>" ;
	  echo "<td bgcolor='white'>" .$row['id1'] ."</td>" ;
	  echo "<td bgcolor='white'>" .$row['akarere'] ."</td>";
	  echo "<td bgcolor='white'>" .$row['umurenge'] ."</td>" ;
          echo "<td bgcolor='white'>" .$row['akagari'] ."</td>" ;
          echo "<td bgcolor='white'>" .$row['umudugudu'] ."</td>" ;
          echo "<td bgcolor='white'>" .$row['telefoni'] ."</td>" ;
          echo "<td bgcolor='white'>" .$row['email'] ."</td>" ;
          echo "<td bgcolor='white'>" .$row['upi'] ."</td>" ;
          echo "<td bgcolor='white'>" .$row['intara'] ."</td>" ;
          echo "<td bgcolor='white'>" .$row['akarere3'] ."</td>" ;
          echo "<td bgcolor='white'>" .$row['umurenge3'] ."</td>" ;
          echo "<td bgcolor='white'>" .$row['akagari3'] ."</td>" ;
          echo "<td bgcolor='white'>" .$row['ibisobanuro'] ."</td>" ;
          echo "<td><a href='update1reg.php'><img src='img/update.jpg'width='90' height='40'</a></td>";
          echo "<td><a href='delete1reg.php'><img src='img/delete.jpg'width='90' height='40' ></td>";
         
  
          
echo"</tr>";
      echo '</div>';

	  }

	// Close the database connection
	mysqli_close($conn);
	?>
                    
	</body>
	</html>
        