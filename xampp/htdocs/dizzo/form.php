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

if(!$conn)
{
die ("can not connect".mysqli_error ());
}
mysql_close($conn);

?>;

<html>
	<head>
<title>insert customer </title>
</head>

<body>
	
<form action="insert.php" method="post">
<table>
<tr>
<td> Firstname </td>
<td>:</td>
<td> <input type="text" name="Firstname"/> </td>
</tr>
<tr>
<td> Lastname </td>
<td>:</td>
<td> <input type="text" name="Lastname"/> </td>
</tr>
<tr>
<td>Email </td>
<td>:</td>
<td> <input type="text" name="Email"/> </td>
</tr>
<tr>
<td>Telephone </td>
<td>:</td>
<td> <input type="text" name="Phone"/> </td>
</tr>
<tr>
<td> <input type="submit" name="insert" value="insert"/> </td>
</tr>
<tr>
    <td> <input type="reset" name="clean" value="clear"/></td>
    </tr>
</table>
</form>
</body>
</html>