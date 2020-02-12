<?php



mysql_connect('localhost', 'root', '');

mysql_select_db('Urugererorwanda');

$sql="SELECT * FROM candidate WHERE natid='$_POST[id]' AND approved ='1'";

$records=mysql_query($sql);

?>
<html>
<head>
	<title>certificate</title>
	<style type="text/css">
		.box{
			margin-top: 20px;
			
			width: 844px;
			height: 597px;
			background-image: url(bg3.jpg);
		}
		.boxunder{
		width: 844px;
		height: 307px;
		
		margin-top: -25px;	
		}
		.boxunder2{
		width: 844px;
		height: 270px;
		
		margin-top: -35px;	
		}
		.boxunder3{
		width: 844px;
		height: 240px;
		
		margin-top: -35px;	
		}
		table{
			margin-left: 200px;
			width: 844px;
		}
		button{
			background-color: #333;
			cursor: pointer;
			color: #fff;
		}
		h1{
			padding-top: 70px;
			padding-left: 220px;
			font-family: bell MT;
			font-weight: bold;
			font-size: 28PX;
		}
		h2{
			margin-top: -5px;
			padding-left: 240px;
			font-family: bell MT;
			font-weight: bold;
			font-size: 20PX;
		}
		h3{
			padding-top:  -5px;
			padding-left: 100px;
			font-family: bell MT;
			font-weight: bold;
			font-size: 30PX;
			text-decoration: underline;
		}
		h4{
			
			padding-left: 340px;
			font-family: bell MT;
			font-weight: bold;
			font-size: 30PX;
			
		}
		h5{
			
			padding-left: 60px;
			font-family: bell MT;
			
			font-size: 16PX;
			
		}
		h6{
			
			padding-left: 61px;
			font-family: bell MT;			
			font-size: 18PX;
			font-weight: bold;
			
		}
	</style>
</head>
<body>
<?php
  $server="localhost";
  $database="Urugererorwanda";
  $username="root";
  $password="";
  $connection=mysql_connect ($server, $username, $password) or die ('server not found'.mysql_error( ));
  mysql_select_db($database, $connection) or die('database not found'.mysql_error( ));
  $query="SELECT * FROM candidate WHERE natid='$_POST[id]' AND approved ='1'";
  $answer=mysql_db_query ($database, $query);
  $count=mysql_num_rows($answer);
  if($count==0)
  {
   print ("<font color=black size=4 face=sans-serif><b>you are not approved, if you are sure go to the center.<b></font>");
  }
  else
 {
while ($log=mysql_fetch_assoc($records))
  {
  	$nationalid = $_POST['id'];
  	$UPDATE=mysql_query("UPDATE candidate SET gotcertificate ='yes' WHERE natid= '".$nationalid."'");

  	// echo "<script>alert('".$_POST['id']."')</script>";


 ?>
<table>
<tr>
<td colspan="2">

<div class="box">
 



	<h1>REPUBURIKA Y'U RWANDA</h1><BR>
	<img src="image/national.jpg" style="width: 100px;height: 100px;margin-left: 350px;margin-top: -35px;">
	<h2>KOMISIYO Y'IGIHUGU Y'ITORERO</h2>
	<div class="boxunder">
	<h3>ICYEMEZO CY'INTORE YO KU RUGERERO</h3>
	<div class="boxunder2">
	
	<h4>N<SUP>o</SUP>: <?php echo $log['id']; ?></h4>
	<div class="boxunder3">
	<h5>Kubera ko bwana/Madamu/Madamazela <font sise="10" face="sans-serif" weight="bold"><?php echo $log['firstname'].'&nbsp;&nbsp;'.$log['lastname']; ?></font> ufite indangamuntu<br>(ID) N<SUP>0</SUP>: <font sise="10" face="sans-serif" weight="bold"><?php echo $log['natid']; ?></font> yagiye ku rugerero mu kagari ka <font sise="10" face="sans-serif" weight="bold"><?php echo $log['cell']; ?></font> <br>Umurenge wa <font sise="10" face="sans-serif" weight="bold"><?php echo $log['sector']; ?></font> Akarere ka <font sise="10" face="sans-serif" weight="bold"><?php echo $log['district']; ?>
		
	</font> Kuva ku itariki ya 27 Mutarama<br> 2018 kugeza ku itariki ya 30 Kamena 2018. Ahawe icyemezo cy'uko asoje amezi atandatu<br>y'Urugerero rw'INKOMEZABIGWI V. Kigali kuwa 29/06/2018</h5>
	<h6>RUCAGU Boniface &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRWAMURANGWA Stephen<br>
Perezida wa komisiyo&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUmuyobozi w'akarere ka gasabo<br>y'igihugu y'itorero&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font face="Arial Rounded MT Bold" size="3"> DUKENYERE DUKOMEZE IMIHIGO IRAKOMEYE</font>
	</h6>

	</div>
	</div>
    </div>

</div>

</td>
</tr>

	<td>
		<style type="text/css" media="print">
.hide{display:none}
</style>
<script type="text/javascript">
function printpage() {
document.getElementById('printButton').style.visibility="hidden";
window.print();
document.getElementById('printButton').style.visibility="visible";  
}
</script>
<body>
<input name="print" type="button" value="Print" id="printButton" onClick="printpage()">
	</td>
</tr>
</table>
<?php
}
}
?>
</body>
</html>