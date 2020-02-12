
<html>
 <head>
  <title>registration</title>
  <link rel="icon" type="jpg" href="lms2.png">
  </head>
  <body >
<form action="usersearch.php" method="POST">
<b>search</b>:<input type="text" name="name"size=12><input type="submit" value="find">
	
<?php
 // Connect to database server
  $conn=mysqli_connect("127.0.0.1", "root", ""); 
if(!$conn)
{
die ("can not connect".mysqli_error ());
}

  // Select database
  mysqli_select_db($conn,'log');
  @$query="SELECT * FROM loginuser WHERE username='$_POST[username]' ORDER BY id";
  $answer=mysqli_query($conn,$query);
  @$count=mysqli_num_rows($answer);
  if(!$count==0)
  {
    echo("<script>alert('client not found!')</script>");
  }
  else{
    echo("<p><u><font color=blue>List of available:$_POST[username]</u>");
  echo("<table cellspacing=3 cellpading=4 border=3><tr><td><b>id:</b></td><td><b>username</b></td><td><b>Password</b></td></tr>");
  while($line=mysqli_fetch_object($answer))
  {
    $id=$line->id;
    $username=$line->username;
    $Password=$line->Password;
        echo("<tr>><td>$id</td><td>$username</td><td>$Password</td></tr>");
  }
}
echo("</table");
mysqli_close($conn);
?>
 </form>
  
 </body>
</html>
