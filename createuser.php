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
if(isset($_POST['save'])){

@$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];




$insert=mysql_query("insert into loginuser values('$id','$username','$password')")or die('data could not be inserted in the database'.mysql_error());
if($insert)
    echo "<center><font color=black size=20>successfuly</font></center>";
}
?>

<html>
    <head>
        <title>create user</title>
        <link rel="icon" type="image/png" href="img/lms2.png">
        <link rel="stylesheet"type="text/css"href="user.css">
    </head>
    <body>
        <div class="loginbox">
            <img src="../LAND/img/12.png"class="avatar">
            <h1>Create user</h1>
            <form action="createuser.php" method="POST">
                <p>USERNAME</p>
                <input class="input1" type="text" name="username" placeholder="username" required=""><br>
<p>PASSWORD</p>
<input class="input1" type="password" name="password" placeholder="password"required=""><br>
<input class="submit" type="submit" name="save" value="Add">&nbsp
<input class="reset" type="reset" name="siba" value="clear">

                
            </form>
        </div>
 
            
               
    
    </body>
</html>