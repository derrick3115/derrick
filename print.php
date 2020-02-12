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

         if(isset($_POST['ohereza'])){
 @$id=$_POST['id'];
 $me1=$_POST['me1'];
 $id1=$_POST['id1'];
 $intara=$_POST['intara'];
 $akarere=$_POST['akarere'];
 $umurenge=$_POST['umurenge'];
 $akagari=$_POST['akagari'];
 $umudugudu=$_POST['umudugudu'];
 $telefoni=$_POST['telefoni'];
 $upi=$_POST['upi'];
 $ibisobanuro=$_POST['ibisobanuro'];
  
 
$sql=mysql_query("insert into form1 (`id`,`me1`,`id1`,`intara`,`akarere`,`umurenge`,`akagari`,`umudugudu`,`telefoni`,`upi`,`ibisobanuro`)
values('$id','$me1','$id1','$intara','$akarere','$umurenge','$akagari','$umudugudu','$telefoni','$upi','$ibisobanuro')");


if(!$sql)
{
echo'umuturage ntiyanditswe.';
}
//else
//{
//echo "<META http-equiv=refresh content=4;URL=success1.php>";
//}
   

}

mysql_close ($conn);
      ?>


<?php
$date = date('Y-m-d');;
print("<center><table height=400 width=300 background=img/.jpg id=pr>
    <tr><td><img src='img/rw.jpg' width='80' height='80'></td><td>Ministry of Land(RNRA)<br>Kimironko sector<br>done on $date </td></tr>
<tr><td colspan=2><font color=brown size=+1.5><u><br /><center>LAND RECIEPT</center></u></font></td></tr>

<tr><td><b>name of person:</b></td><td>$me1</td></tr>


<tr><td><b>ID:</b></td><td>$id1</td></tr>
<tr><td><b>INTARA:</b></td><td>$intara</B></td></tr>
<tr><td><b>AKARERE:</b></td><td>$akarere</td></tr>
<tr><td><b>UMURENGE:</b></td><td>$umurenge</td></tr>
<tr><td><b>AKAGARI:</b></td><td>$akagari</td></tr>
<tr><td><b>UMUDUGUDU:</b></td><td>$umudugudu</td></tr>
<tr><td><b>TELEFONI:</b></td><td>$telefoni</B></td></tr>
    
        <tr><td><b>N0 Y'BUTAKA:</b></td><td>$upi</B></td></tr>
        <tr><td><b>IMPAMVU:</b></td><td>$ibisobanuro</B></td></tr>
<TR><td colspan=2><i><font face=forte color=#CC3333> THANKS FOR REGISTERING YOUR LAND</font></i></td></TR>
</table></center>");
  
?>
<html>
<head>
    <link rel="icon" type="jpg" href="lms2.png"> 
<title></title>
</head>
<body>
    <a href="user.php"><img src="img/arrow.gif">back to homepage</a>
<center>
<input type="button" value="Print your reciept"onclick="window.print()" class="button"><br>
</center>
</body>
</html>