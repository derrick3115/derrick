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
if(isset($_POST['send'])){

@$id=$_POST['id'];
$sdate = date('Y-m-d h:i:s');;
$anounce=$_POST['anounce'];




$insert=mysql_query("insert into anounce values('$id','$sdate','$anounce')")or die('data could not be inserted in the database'.mysql_error());
if($insert)
    echo "successfuly";
}
?>

<html>
    <head>
        <title>Anouncement</title>
        <link rel="icon" type="image/png" href="img/lms2.png">
        <link href="css/anounce.css" rel="stylesheet" type="text/css"/>
    </head>
    <body><center><br><br><br><br><br>
         
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="viewanounce.php">view anouncements</a><br><br><br><br><br>
        <form action="anounce.php"method="post">
            <br>
            &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <textarea class="input"name="anounce" rows="3"cols="40" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <br><input class="submit"type="submit" name="send"value="send">
        </body>
</html>