
<html>
 <head>
   <meta charset="utf-8" />
  </head>
  <title>registration</title>
  <link rel="icon" type="jpg" href="lms2.png">
   <body >  
<form action="1search.php" method="POST">
<b>search</b>:<input type="text" name="name"size=12><input type="submit" value="find">
	
<?php
  // Connect to database server
  $conn=mysqli_connect("127.0.0.1", "root", ""); 
if(!$conn)
{
die ("can not connect".mysqli_error ());
}

  // Select database
  mysqli_select_db($conn,'reg');
  @$query="SELECT * FROM form1 WHERE me1='$_POST[me1]' ORDER BY id";
  $answer=mysqli_query($conn,$query);
  @$count=mysqli_num_rows($answer);
  if(!$count==0)
  {
    echo("<script>alert('User not found!')</script>");
  }
  else{
    echo("<p><u><font color=blue>List of available:`$me1`</u>");
  echo("<table border=1>
<tr>
<th bgcolor='grey'>ID</th>
<th bgcolor='grey'>Njyewe/Twebwe</th>
<th bgcolor='grey'>Irangamimerere</th>
<th bgcolor='grey'>Indangamuntu/Pasiporo</th>
<th bgcolor='grey'>Akarere ka</th>
        <th bgcolor='grey'>Umurenge wa</th>
        <th bgcolor='grey'>Akagari ka</th>
        <th bgcolor='grey'>Umudugudu wa</th>
        <th bgcolor='grey'>Telefoni</th>
        <th bgcolor='grey'>E-mail</th>
        <th bgcolor='grey'>Nimero y'ikibanza/isambu (UPI)</th>
        <th bgcolor='grey'>Intara</th>
        <th bgcolor='grey'>Akarere</th>
        <th bgcolor='grey'>Umurenge</th>
        <th bgcolor='grey'>Akagari</th>
        <th bgcolor='grey'>Ibisobanuro</th>
         <th bgcolor='grey'>EDIT</th>
<th bgcolor='grey'>DELETE</th></tr>");
  while($line=mysqli_fetch_object($answer))
  {
    $id=$line->id;
    $me1=$line->me1;
    $irangamimerere=$line->irangamimerere;
    $id1=$line->id1;
    $umurenge=$line->umurenge;
    $akagari=$line->akagari;
    $umudugudu=$line->umudugudu;
    $telefoni=$line->telefoni;
    $email=$line->email;
    $upi=$line->upi;
    $intara=$line->intara;
    $akarere3=$line->akarere3;
    $umurenge3=$line->umurenge3;
    $akagari3=$line->akagari3;
    $ibisobanuro=$line->ibisobanuro;
    echo("<tr>><td>$id</td><td>$me1</td><td>$irangamimerere</td><td>$id1</td><td>$umurenge</td><td>$akagari</td><td>$umudugudu</td><td>$telefoni</td><td>$email</td><td>$upi</td><td>$intara</td><td>$akarere3</td><td>$umurenge3</td><td>$akagari3</td><td>$ibisobanuro</td>");
  }
}
echo("</table");
mysqli_close($conn);
?>
 </form>
  </div>
 </body>
</html>
