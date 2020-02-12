<?php 

// MySQL connection variables
// Server name 
$hostname = "localhost";
// Name of the MySQL database
$database = "solange";
// Login mysql user
$username = "root";
// Login mysql password
$password = "";

// Connection String
$conn = mysql_connect($hostname, $username, $password);
// MySQL select database
mysql_select_db($database, $conn);


?>


<?php  
if(@$_GET['UPDT_SELR']){
mysql_query("DELETE FROM sellers WHERE Seller_id='".$_GET['S_ID']."'")or die (mysql_error());
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NMIL</title>
<link rel="stylesheet" media="all" href="newcss.css" />
<script>
function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=h+":"+m+":"+s;
t=setTimeout(function(){startTime()},500);
}

function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}
</script>
</head>
<body id="body" onload="startTime()" background="pictures/DA1.jpg" style="background-size: cover;">
  <div align="center">
  <?php
  include('connection.php');
  ?>
    <table width="850" height="600" border="0" cellspacing="0" background="pictures/index_06.jpg">
      <tr>
      <td width="60" rowspan="3" background="pictures/index_06.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td width="249" height="114" colspan="3"><img src="pictures/logo.jpg" width="800" height="115" alt="logo" /></td>
        <td width="380" align="center" background="../new/pictures/index_02.jpg">&nbsp;</td>
        <td width="26" rowspan="3" background="pictures/index_06.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      </tr>
      <tr>
        <td height="15" colspan="2" background="pictures/menuback.jpg"><center><div class="top_menu">
      <ul style=" background: url(pictures/top_button.jpg);">
      <li><a href="Manager.php">Manager Home</a></li>
      
      <li><a href="account.php">View account</a></li>
      </ul>
      </div></center></td>
      </tr>
      <tr>
        <td  style="border-radius:40px 0px 0px 40px;" height="447" width="100" background="pictures/index_08.jpg"><div class="left_menu">
        <ul>
        <li><a href="addproducts.php" style=" background: url(pictures/left_button.jpg);"> ADD PRODUCT </a></li>
        <li><a href="addsellers.php" style=" background: url(pictures/left_button.jpg);">ADD SELLER </a></li>
		<li><a href="history.php" style=" background: url(pictures/left_button.jpg);">SELLING HISTORY </a></li>
		 <li><a href="expired.php" style=" background: url(pictures/left_button.jpg);">EXPIRED PRODUCTS </a></li>
		 <li><a href="password.php" style=" background: url(pictures/left_button.jpg);">CHANGE PASSWORD </a></li>
		 <li><a href="logout.php" style=" background: url(pictures/left_button.jpg);">LOGOUT </a></li>
        </ul>
        </div></td></td>
        <td background="pictures/index_08.jpg" class="radius" valign="top">
		<div class=" content">
        <p class="style8">
        <div align="left">
          <table  border="0" >
            <form action="" method="post">
            <caption>&nbsp;
              </caption>
        <tr>
          <td ><div align="left"><strong>FIRST NAME</strong>: </div></td>
          <td ><div align="center" >
            <input name="fname" type="text" maxlength="50"  required />
            </div></td>
        </tr>
            <tr>
              <td ><div align="left" ><strong>LAST NAME: </strong></div></td>
          <td ><input name="lname" type="text" maxlength="50" required /></td>
        </tr>
            <tr>
              <td ><div align="left" ><strong>PHONE NUMBER: </strong></div></td>
          <td ><input name="pnumber" type="NUMBER" maxlength="10" min="0720000000" max="0789999999" required /></td>
        </tr>
            <tr>
              <td >&nbsp;</td>
          <td ><div align="center"><input name="savesell" type="submit" value="save" />
            <input name="" type="reset" value="delete" />
          </div></td>
        </tr>
            </form>
          </table><br/>
		  <?php
		  if (isset($_POST['savesell']))
		  {
		  if (empty($_POST['fname'])or empty($_POST['lname'])or empty($_POST['pnumber']))
		  {
		  echo"<font color='red'><p style='border-style:dotted;'>please fill all required information!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</p></font>";
		  }
		  else{
		  if(mysql_query("insert into sellers values(null,'".$_POST['fname'].' '.$_POST['lname']."','".$_POST['pnumber']."','123')")){
		  echo"<font color='green'>New seller was registered safely.</font>";
		  
		  //header('location:addsellers.php');
		  }
		  else{
		  echo"Enable to register New seller";
		  return;
		  }
		  }
		  }
		  ?>
		  <h2><U>LIST OF ALL SELLERS</U><h2/>
          </p>
        </div>
		<div><table  cellpadding="2" border="0" bgcolor="silver">
		<?php
		$select="select * from sellers";
                $sql=mysql_query($select);
		$num=mysql_num_rows($sql);
               if($num>0)
		{
		?>
		<tr bgcolor="green">
		<th>ID</th>
		<th>NAMES</th>
		<th>PHONE</th>
		<th colspan="2">OPTION</th>
		</tr>
		<?php
		while($show=mysql_fetch_array($sql))
		{?>
		<tr>
		<td><?php echo $show['id'];  ?></td>
		<td><?php echo $show['names'];  ?></td>
		<td><?php echo $show['phone'];  ?></td>
		<td><?php echo "<a href='solange.php?ID=".$show['id']."&process2=update'>";?><img src="pictures/tools/pencil.png" width="20" height="20" alt="update" /></td>
		
		</tr>
		<?php
		}}
		else{
		echo"<h4 style='font-family: monospace, fantasy, cursive, Terminal;color:#990000;'>NO SELER AVAILABLE IN YOUR SYSTEM</h4>";
		}
		
		?></table>
		</div>
		<p id=""></p></td>
      </tr>
      <tr>
        <td height="20" colspan="3" background="pictures/index_06.jpg"><strong><center>&copy; All rights reserved to @ solange 2018</center></strong></td>
      </tr>
    </table>
  </div>
</body>
</html>
