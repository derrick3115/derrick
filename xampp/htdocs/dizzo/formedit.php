<html>
   <head>
   <title>update data from database </title>
   </head>
   <body>
      <h1> Customers of School </h1>

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
   echo"<table border=1>";
   echo"<tr>";
   echo"<th>Id</th>";
   echo"<th>Firstname </th>";
   echo"<th>Lastname </th>";
   echo"<th>Email </th>";
   echo"<th>Phone </th>";
 
   echo"</tr>";

   while($row = mysqli_fetch_array($rs)) {

      // Write the value of the column Name (which is now in the array $row)
    echo "<form action=update.php method=post>";
     echo"<tr>";
     echo "<td>" ."<input type=text name=Id value=" .$row['Id'] ." </td>" ;
     echo "<td>" ."<input type=text name=Firstname value=" .$row['Firstname'] ." </td>" ;
      echo "<td>" ."<input type=text name=Lastname value=" .$row['Lastname'] ." </td>" ;
     echo "<td>" ."<input type=text name=Email value=" .$row['Email'] ." </td>";
      echo "<td>" ."<input type=text name=Phone value=" .$row['Phone'] ." </td>" ;
       echo "<td>" ."<input type=submit name=update value=update"  ." </td>" ;
echo"</tr>";

echo"</form>";
     }

   // Close the database connection
   mysqli_close($conn);
   ?>
   </body>
   </html>
