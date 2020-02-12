<?php
// MySQL connection variables
// Server name 
$hostname = "localhost";
// Name of the MySQL database
$database = "log";
// Login mysql user
$username = "root";
// Login mysql password
$password = "";

// Connection String
$conn = mysql_connect($hostname, $username, $password);
// MySQL select database
mysql_select_db($database, $conn);

//registering a login session
if (!isset($_SESSION)) {
  session_start();
}

?>

//if the login form is submitted
if (isset($_POST['save'])) { // if form has been submitted

//if (!get_magic_quotes_gpc()) {

$password = $_POST['password'];
$username = $_POST['username'];
$check = mysql_query("SELECT * FROM leaders where username = '$username' and password='$password' ")or die(mysql_error());

$info = mysql_fetch_array( $check );

$password = $info['password'];
$username = $info['username'];

echo "<div class=error>";

//Gives error if user dosen't exist
$check2 = mysql_num_rows($check);

if ($check2 == 0) {

echo '<center class=wrong>Unvalid Member Account</center></center>';
echo "<META http-equiv=refresh content=3; URL=loginform.php>";

}
else  if ($username != $username){
echo '<center class=wrong> incorrect password</center>';
}
 else  if ($password != $password){
echo '<center class=wrong> incorrect password</center>';
}else{
  $_SESSION['username'] = $username;
$_SESSION['password'] = $password;

//then redirect them to the members area
echo '<center class=access>please Wait.... <img src="images/loading.gif " ></center></center>';
echo "<META http-equiv=refresh content=4;URL=pages/homepage.php>";

}

echo "</div>";

}

?>