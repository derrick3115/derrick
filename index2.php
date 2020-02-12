<?php
// MySQL connection variables
// Server name 
$hostname = "localhost";
// Name of the MySQL database
$database = "lms";
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
   				<?php 

//if the login form is submitted
if (isset($_POST['save'])) { // if form has been submitted

//if (!get_magic_quotes_gpc()) {

$password = $_POST['password'];
$username = $_POST['username'];
$check = mysql_query("SELECT * FROM loginuser where username = '$username' and password='$password' ")or die(mysql_error());

$info = mysql_fetch_array( $check );

$password = $info['password'];
$username = $info['username'];

echo "<div class=error>";

//Gives error if user dosen't exist
$check2 = mysql_num_rows($check);

if ($check2 == 0) {
echo '<center class=wrong><font color=`white`>Unvalid Member Account</font></center></center>';
echo "<META http-equiv=refresh content=3; URL=index2.php>";

}
else  if ($username != $username){
echo '<center class=wrong> incorrect username</center>';
}
 else  if ($password != $password){
echo '<center class=wrong> incorrect password</center>';
}else{
  $_SESSION['username'] = $username;
$_SESSION['password'] = $password;

//then redirect them to the members area
echo '<center class=access>please Wait.... <img src="img/loading9.gif "width=50 height=50></center></center>';
echo "<META http-equiv=refresh content=4;URL=user.php>";

}

echo "</div>";

}

?>

<html> 

    <head>
        <title>LAND MS</title>
        <link rel="icon" type="image/png" href="img/lms2.png">
        <link href="css/css2.css" rel="stylesheet" type="text/css"/>
    </head>
    <body background="img/hfhfh.jpg">
       
    	   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  
            <div class="login-box">
                <img src="../LAND/img/12.png" class="user">
            <h1>USER FORM</h1>
    	
         
            		
            <form action="index2.php" method="POST">
 
                <p>USERNAME</p>
                <input class="input" type="text" name="username" placeholder="username" required=""><br>
<p>PASSWORD</p>
<input class="input" type="password" name="password" placeholder="password"required=""><br>
<input class="submit" type="submit" name="save" value="login">&nbsp
<input class="reset" type="reset" name="siba" value="clear">
<br><a href="index.php">Are you the Admin?</a>
<br><br><br><a href="forget.php">Forget password</a><br><br>
&COPY;Derrick Munezero
</form>
    				
    			
    		</div>
    		<div class="bottom">
    			
    		</div>
    	</div>

    </body>
    </html>