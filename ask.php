 <?php

 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>

<html>
<head><title>baza</title>
<link rel="icon" type="image/x-png" href="img/status.jpg">

<STYLE>
.body
{
    margin: 40px auto;
    margin-top: 10px;
    width: 1000px;
}
#bar ul{
	background-color:white;
	margin-top:6px;
}
	
	#bar ul  li {
		list-style-type: none;
		display: inline-block;
			
		background-color:white;
		height:40;
		
		}
		#bar ul li:hover{
			background-color: teal;
			opacity:0.7;
			height:30;
			padding-bottom:10px;
			transition:0.8s all;
		}
		#bar ul li a{
			text-decoration: none;
			color: #c12283;
			padding: 19px;
			font-family:latin;
			font-size:20;
		
		}
			#bar ul li ul li {
    display: none;
}
 
      .dropdown-content{
      	display: none;
      	position: absolute;
      	background-color:teal;
      	z-index: 1;
      	 text-align: center;
      	 width: 90;
      	 height: 50px;

      }
      .dropdown-content a{
      	display: block;
      	height: 10px;
      	background-color: white;

      }
       .dropdown-content a:hover{
       	background-color: teal ;
       	border-radius: 0 10px 0 0;
       	color: black;
       }
      .dropdown:hover .dropdown-content{
      	display: block;
      }
 ul li :hover ul li{
    display: block;
  position: absolute;
}
.go{
 	
  font-family: cursive;
  background: white;
  border-radius: 10px;
 text-decoration: none;
 
 }
 .go a{
 	text-decoration: none;
 	color: black;
 	font-size: 20;
 }
 footer{
	text-align: center;
	margin-top:10px;
	background-color: TEAL;
	color: white;
	width: 1000px;
	height: 40px;
}
textarea{
	width: 500px;
	height: 200px;
	font-family: verdana;
	font-size: 15px;
}
</STYLE>
</head><body bgcolor= #f1f1f1>
	<div class="body">

	<div style="background-color: teal ;width:1000">
<CENTER><IMG SRC="img/logo.png" WIDTH="800", height="100"></CENTER></IMG></div>


<div id="bar">
<CENTER>
<ul>
	 
<li><A HREF="account.php" >HOME</A>&nbsp &nbsp &nbsp </li>
 <li><A HREF="ask.php">ASK AUNTY</A>&nbsp &nbsp &nbsp </li>
<li><A HREF="answers.php">ANSWERS</A>&nbsp &nbsp &nbsp </li>
<li><A HREF="stories.php">STORIES</A>&nbsp &nbsp &nbsp</li>
<li><A HREF="logout.php">LOGOUT</A></li>

</ul>
</div>
</CENTER>


<center>
<div style="background-color:pink;color:black;align:center;width:700;height:400; left: 20%">

<p><center><font color="teal" font face="cursive" font size=5>ENTER YOUR QUESTION</FONT></CENTER></p>

 <form action="" method="POST">
<textarea name="question" rows="5" columns="100" placeholder="ENTER YOUR QUESTION"></textarea>
<br>
<a href="account.php"><input type="submit" value="send" name="submit"></a><br>

<br> <br><button class="go" ><a href="answers.php">view answers</a></button>
</form></font></p></div>
<footer><font size="3", font face="sans-serif" >
<p>&copy copyright 2018 | eudoxie</p>
</font></footer>
</div>
</BR>
</body>
</html>
<?php
$host='localhost';
$user='root';
$pass='';
$db='pro';

$con= mysqli_connect($host,$user,$pass)or die('failed to connect');
mysqli_select_db($con,$db);
$username = stripcslashes($_SESSION['username']);
$username=mysqli_real_escape_string($con,$username);

$da="SELECT * FROM signup WHERE username='$username'";
$query= mysqli_query($con,$da);
$row=mysqli_fetch_array($query);
$name=$row['id'];
$gender=$row['username'];
 
if(isset($_POST['submit'])){
	$date = date('Y-m-d h:i:s');;
$query="insert into questions values('$-POST[id]','$name','$username','$_POST[question]','$date','no')";
$sql=mysqli_query($con,$query) or die(mysqli_error($con));

if ($sql) {
	echo "<script>alert('dear $username your question has been sent successfully you can wait to see your answer ')</script>";
}
}
?>
