
<?php
// MySQL connection variables
// Server name 
$hostname = "localhost";
// Name of the MySQL database
$database = "solange";
// Login mysql user
$username = "root";
// Login mysql password
$password = "";

// Connection String
$con = mysql_connect($hostname, $username, $password);
// MySQL select database
mysql_select_db($database, $con);

error_reporting(0);
$con=mysqli_connect('localhost','root','');
if (!$con)
{
	die ('can not connect:'. mysqli_error ());
}
mysqli_select_db($con,'solange') or die(mysqli_error($con));

 $id='';    
 $names="";
 $phone="";
 $password="";

 if(isset($_POST['update'])){
 	$id=$_POST['id'];
	$names=$_POST['names'];
$phone=$_POST['phone'];
$password=$_POST['password'];

$query=mysqli_query($con,"UPDATE sellers SET names='$names',phone='$phone',password='$password' WHERE id='$id'");
}
if($query)
{
	// echo "<META http-equiv=refresh content=3;URL=view.php>";
}
if (isset($_GET['id']) || isset($_POST['id'])){
    
    $id=isset($_GET['id'])?$_GET['id']:$_POST['id'];
    $d= "SELECT * FROM sellers where id=".$id;
        $e= mysqli_query($con,$d);




if(isset($e)){
    
  //  print $strSQLi;
 $row = mysqli_fetch_array($e,true);
 $id=$row['id'];
 $names=$row['names'];
 $phone=$row['phone'];
 $password=$row['password'];
 
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	@import url("panel.css");
	</style>
	<img src="icon/banneradmin.jpg" id="img" style="margin-left:100px">
  <link rel="icon" type="image/x-png" href="data/admin.jpg">
	<title>admin panel</title>
</head>
<body bgcolor="white">
<div style="width:280px;height:666px;float:left;margin-top:-60px;margin-left:70px">
	<ul class="link">
		<li><a style="font-size:25px" href="admin.php">Home</a>&nbsp&nbsp</li><br><br>
		<li><a style="font-size:25px" href="view.php">view participater</a>&nbsp&nbsp</li><br><br>
                <li><a style="font-size:25px" href="view2.php">view comment</a>&nbsp&nbsp</li><br><br>
                <li><a style="font-size:25px" href="search.php">search</a>&nbsp&nbsp</li><br><br>
                <li><a style="font-size:25px" href="addupdate.php">News upload</a>&nbsp&nbsp</li><br><br>
                  <li><a style="font-size:25px" href="addupdates.php">Upload</a>&nbsp&nbsp</li><br><br>
		<li><a onclick="return confirm('are you sure you want to logout ?');" style="font-size:25px" href="log out.php">log out</a>&nbsp&nbsp</li><br>
	</ul>
</div></div>	
	<center><h1>Update participater here</h1></center>
        <form method="POST" action="solange.php" style="margin-left:690px;margin-top:40px">
<table>
	 <tr><td><input style="width:250px;height:40px" type="hidden" name="id"  placeholder="Identification" value="<?php echo $id; ?>" required></td></tr>
  <tr><td><input style="width:250px;height:40px" type="text" name="names" pattern="[(a-z) (A-Z)\s]+$" pattern="[(a-z) (A-Z) /(')]+$"  autocomplete="off" placeholder="First name" value="<?php echo $names; ?>" required></td></tr>
<tr><td><input style="width:250px;height:40px" type="text" name="phone" placeholder="Last name" value="<?php echo $phone; ?>" required></td></tr>
<tr><td><input style="width:250px;height:40px" type="text" name="password" maxlength="2" placeholder="enter your age" value="<?php echo $password;
 ?>" required></td></tr>
<br>
<tr><td><input type="submit" value="update" name="update" value="send"></td></tr>
</table>  
	</div>
	<br>
	<div style="background-color:grey;width:170%;height:60px;float:left;margin-top:210px;margin-left:-470px">
	<center><p style="font-size:20px">copyright 2018|Designed by Benitha</p></center>
</div>
</body>
</html>