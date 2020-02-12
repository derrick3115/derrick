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

<!DOCTYPE html>
<html lang='en'>
<head>
    <link rel="icon" type="jpg" href="lms2.png"> 
  <script>
function myFunction() {
    document.getElementById("myDropdow").classList.toggle("sho");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbt')) {

    var dropdowns = document.getElementsByClassName("dropdown-conten");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('sho')) {
        openDropdown.classList.remove('sho');
      }
    }
  }
}
</script> 
    <meta charset="UTF-8" /> 
    <title>Forget password
</title>
    <link rel="icon" type="image/png" href="img/lms2.png">
 <link rel="stylesheet" type="text/css" href="css/login.css" />
    <link rel="stylesheet" type="text/css" href="css/menu.css" />
      <link rel="stylesheet" type="text/css" href="css/success.css" />
<link rel="icon" type="image/png" href="img/login.png">
<style>
/*table*/
.table{
  background-color:skyblue ;
}

.form {
  background-color:brown; 
  width:4500px;
  margin:30px auto;
  border-radius:0.4em;
  border:1px solid brown;
  overflow:hidden;
  box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);
   background:linear-gradient(left, #111, #444, #b6b6b8, #444, #111);
}

  .tab{
  background:violet; 
  margin:30px auto;
  border-radius:0.4em;
  
  box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);
}

.tab2{
  color: #020305;
  background-color: #0c2434;
  border-radius: 10px;
   box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);

}
.label{
  text-align: center;
  background:#0c0d0d;
  border-radius:10px;
  display: inline-block;
  color: white;
}
.label a{
  color: white;
  font-size:35px;
  padding:10px;
  text-decoration:none; 
}
.label a:hover{
  color:#03036b;
}
/*whole form background*/
  .tab{
  background:#023d62; 
  margin:30px auto;
  border-radius:0.4em;
  
  box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);
}
 .footer{
    color:020509;
 }
.dropbtn {
    background-color:transparent;
    color: white;
    padding: 12px;
    font-size: 30px;
    border: none;
    cursor: pointer;
}
.dropbtn:hover, .dropbtn:focus {
    color:#03036b;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 120px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
.dropbt {
    background-color:transparent;
    color: white;
    padding: 12px;
    font-size: 30px;
    border: none;
    cursor: pointer;
}
.dropbt:hover, .dropbt:focus {
    color:#03036b;
}

/* The container <div> - needed to position the dropdown content */
.drop{
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-conten {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 120px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-conten a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-conten a:hover {background-color: #ddd}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.sho {display:block;}
</style>



  <style type="text/css">
.footer{
color:black;
}
/*form background*/
  .tab{
  background:#023d62; 
  margin:30px auto;
  border-radius:0.4em;
  background-color: brown;
  
  box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);

}
/*links css*/
.menu{
  text-align: center;
  background:#0c0d0d;
  display: inline-block;
  color: white;
}
.menu a{
  text-decoration:none;
  font-size:30px;
  padding:20px;
  color:white;
}
.menu a:hover{
color:#03036b;
}
.forget{
    color: white;
}
</style>
  
  
</head>

<body bgcolor="brown">
<center><table border="0" class="tab">


<tr><td align="center" colspan="3">

<ul class="label">
 
    &nbsp &nbsp &nbsp 
    <div class="dropdown">    
            <button onclick="myFunctio()" class="dropbtn">User</button>
 <div id="myDropdown" class="dropdown-content">            
   
     <a href="index2.php">login</a>
</div></div>
<div class="drop">    
            </div>
</ul>
 


</td></tr>
</center><br><br><br>

<tr><td height="400" width="200"> </td> <td>
<form action="forget.php" method="POST">
  <h1>Recover password </h1>
 <?php
 
 
  $server="localhost";
$database="lms";
$login="root";
$password="";
$connexion=mysql_connect ($server, $login, $password) or die ('Server cannot be found'.mysql_error ( ));
mysql_select_db ($database,$connexion)or die ('database cannot be found'.mysql_error( ));
 
 
 if(isset($_POST['forget']))
  {
   $username=$_POST['username'];
   //$phone=$_POST['pno'];
    //$lastname=$_POST['lname'];
    
   $sql="SELECT * FROM loginuser where username = '$username';"; 
   $result_set=mysql_query($sql,$connexion);
   if(!$result_set)
   {
   die("Query faill".mysql_error());
   }
if(mysql_num_rows($result_set)>0)
{

//$num=mysql_num_rows($result_set);
while($row=mysql_fetch_array($result_set))
{
    $username=$row[1];
$password=$row[2];


echo"<p class='success'>"."salut ".$username.""."<br>"."your password is:&nbsp; &nbsp;".$password."</p>";
echo'<meta content="10;index2.php" http-equiv="refresh"  />';
}}
else
{
echo"<p class='wrong'>&nbsp;&nbsp;Incorrect Input</p>";
echo"<p class='success'>&nbsp;&nbsp;make sure you filled well<br>
the boxes </p>";
echo'<meta content="10;forget.php" http-equiv="refresh" />';
}
}
mysql_close($connexion);
?>
  

 <div class="inset">
  <p>
    <label for="email">USERNAME</label>
    <input type="text" name="username" id="fname" required x-moz-errormessage="Enter first name">
  </p>
   <!--<p>
    <label for="lastname">nickname</label>
    <input type="text" name="nickname" id="nickname" required x-moz-errormessage="enter your nickname">
  </p>
  </div>-->
  <p class="p-container">
    <input type="submit" name="forget" id="go" value="submit">
  </p>
  <p><div class="forget"> <a href="index2.php" color="white" ><img src="img/back.gif">> </a> </div ></p>
</form>
</td>

  </div>
 
</form>
</td>

<td width="200"> </td> </tr>

 <tr>
<td colspan="3" align="center" bgcolor="white" class="footer">&copy Munezero derrick 2018</td>
</tr>

</table>
</center>


</body>
</html>
<script>
function myFunctio() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>





