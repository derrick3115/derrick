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

         if(isset($_POST['send'])){
 @$id=$_POST['id'];
 $name=$_POST['name'];
 @$tel=$_POST['tel'];
 $feedback=$_POST['feedback'];

  
 
$sql=mysql_query("insert into feedback (`id`,`name`,`tel`,`feedback`)
values('$id','$name','$tel','$feedback')");


if(!$sql)
{
echo'can\'t been sent.';
}
else
{
echo "<center><font color=white size=20>successfuly and thanks for your help</font></center>";
echo "<META http-equiv=refresh content=2;url=user.php>";
}
}
mysql_close ($conn);
      ?>
<html>
    <head><title>Feedback</title>
        <link rel="icon" type="image/png" href="img/lms2.png">
        <link href="css/feedback.css" rel="stylesheet" type="text/css"/>
    </head>
    <body background="img/main-bg.jpg">
        
        
        <table>
        <center>
             
        
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><h3>Fill here your comment</h3></u>
                        <div class="rel">
                        <form action="feedback.php" method="post">
                            
                         
                            <p>Name:</p>
                           <input type="text" name="name" class="input"><br>
                           <p>Number:</p>
                           <input type="tel" name="tel" class="input" maxlength="10"minlength="10"><br>
                           <p>Comments:</p><br>
                           <textarea class="input"name="feedback" rows="3"cols="30" data-rule="required" data-msg="Please write something for us" placeholder="comments"></textarea>
                           <br><input class="submit"type="submit" name="send" value="Send">
                        </div>
                        
                        </td></tr>
                        
        </center>
                        
         
                        
        
        
                        <tr><th colspan="2"><font color="white">&COPY;Derrick Munezero</font></th></tr>
                        </form>
                        </table></center>
    </body>
</html>