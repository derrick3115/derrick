  <?php
   // Connect to database server
   $servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysql_connect($servername, $username, $password) or die(mysql_error());
// select db
mysql_select_db("dizzo",$conn) or die(mysql_error());
$resultSet = mysql_query("insert into customer ",$conn);

$Firstname=$_POST['Firstname'];
$Lastname=$_POST['Lastname'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];

$sql="INSERT INTO customer(Firstname,Lastname,Email,phone) values ('.$Firstname.','.$Lastname.','.$Email.','.$Phone.')";




?>
<table border="1">
    <tr>
        <th>ID</th>
        <th>FNAME</th>
        <th>LNAME</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>DISTRICT</th>
    </tr>
    <tr>
       while($row = mysqli_fetch_array($rs,'customer'))
{
  echo "<tr><td>"; 
  echo $row['Id'];
  echo "</td><td>"; 
  echo $row['Firstname'];
  echo "</td><td>";   
  echo $row['Lastname'];
  echo "</td><td>"; 
  echo $row['Email'];
  echo "</td><td>";   
  echo $row['Phone'];
  echo "</td><td>";
              echo $row['District'];
              echo"</td></tr>";
</table>>