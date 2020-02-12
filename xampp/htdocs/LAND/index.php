<?php
$hostname = "localhost";
$database = "log";
$username = "root";
$password = "";
$conn = mysql_connect($hostname, $username, $password);
mysql_select_db($database, $conn);
if (!isset($_SESSION)) {
  session_start();
}
?>

<html>
<head><title>Login Page</title>
<link rel="icon" type="img/png" href="img/lms2.png">
<link href="1css.css" rel="stylesheet" type="text/css"/>
</head>
<body background="img/hfhfh.jpg" size="1000"><div class="adlog">

        <img src="img/banner.jpeg" class="ban">
<span class="req">
  <?php 
if (isset($_POST['SubmitButton'])) {
$username=$_POST['username'];
$password=$_POST['password'];
$check=mysql_query("SELECT * FROM login where username='$username' and password='$password' ")or die(mysql_error());
$info=mysql_fetch_array($check);
$username=$info['username'];
$password=$info['password'];
$check2=mysql_num_rows($check);
 
if ($username!=$username){
 echo'<font color=orange><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp you are not allowed to enter in the system.<br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp please fill in real username</b></font>';
}
else if($password!=$password)
{
echo'<font color=grey><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp you are not allowed to enter in the system.<br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp please fill in your real Password</b></font>';
}
else if (empty($username) && empty($password)) {
  echo'<font color=pink><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp you are not allowed to enter in the system.<br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp please fill in your username and Password</b></font>';
}
else 
{
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <img src='img/hand.jpg' width='50' height='30'><font color='white'><b>&nbsp &nbsp &nbsp  welcome to the LM System </b></font>"; 
echo "<META http-equiv=refresh content=2;url=homepage.php>";
}
}
?>
</span>

<form action="index.php" class="login" method="post">
    <h1>ADMIN LOGIN</h1>
    <input type="text" name="username" class="login-input" placeholder="Username"  autofocus autocomplete="off">
    <input type="password" name="password" class="login-input"  placeholder="Password">
    <input type="submit" name="SubmitButton" value="Login" class="login-submit">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <a href="index2.php"><font color="white"face="arial"size="3"> No am user</font></a>
  </form>
  <script >
  Date.now();
  </script>
  <center class="botto"><FONT SIZE="3" COLOR="white" style="font-family: 'castellar' sans-serif;">&copy copyright for <font style="font-family: 'castellar' sans-serif; font-size:18px;">Land management system</font>
 designed by  <b>DERRICK.M</b>  2018</FONT>
</center>
  </div>
</body>
</html>
