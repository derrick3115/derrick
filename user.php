<html>
    <head><title>Welcome</title>
              <link rel="icon" type="image/png" href="img/lms2.png">
        <link href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="fonts/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css"/>
          
        <style type="text/css">
        @import url("css/user1.css");
        </style>
    </head>
    <body background="img/parallax-bg.jpg" alt=""/>
        
                   <?php
        Session_start();
        if (!isset($_SESSION['username'])) {

            header('location:index2.php');
        }
        ?>
        <table border="0" align="center" background="img/eefff.jpg">
             <tr><td colspan="3">
    <center><img src="img/banner.jpg" alt=""/>
        </td></tr>
            <tr><td colspan="2">
        <ul>
            <li><a href="user.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a></li>
           <li><a>Things to do</a>
         <ul>
             <li><a href="1reg.php">Form parcel sub-division</a></li>
             <li><a href="view1reg1.php">View data stored</a></li>
             
             
             
               
             </ul>
         
         <li><a><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Contact:</a>
         <ul>
              
             <li><a href="feedback.php">Contact us</a></li>
             
           
         </ul>
         </li>
         <li><a><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;Admin</a>
         <ul>
             <li><a href="index.php">Admin</a></li>
             <li><a href="logout2.php">Log out</a></li>
         </ul>
         </li>
         
        
        
        </ul>
                </td></tr>
            <tr><td colspan="1" rowspan="1">
                    <center>  
<img src="img/home.gif" width=370 height=250 ></td>&nbsp&nbsp&nbsp<td colspan="1" rowspan="1" bgcolor="transparent"  >
                    <?php
	// Connect to database server
	$conn=mysqli_connect("127.0.0.1", "root", ""); 
if(!$conn)
{
die ("can not connect".mysqli_error ());
}

	// Select database
	mysqli_select_db($conn,'lms');
// SQL query
	$strSQLi = "SELECT * FROM anounce";

	// Execute the query (the recordset $rs contains the result)
	$rs = mysqli_query($conn,$strSQLi);
	
	// Loop the recordset $rs
	// Each row will be made into an array ($row) using mysql_fetch_array
        echo '<div align="center">';
	echo"<table>";
	echo"<tr>";
        echo"<th bgcolor='grey'>DATE</th>";
	echo"<th bgcolor='grey'>ANOUNCEMENT</th>";
    	echo"</tr>";

	while($row = mysqli_fetch_array($rs)) {

	   // Write the value of the column Name (which is now in the array $row)
	  echo"<tr>";
          
	   echo "<td >" .$row['date'] ."</td>" ;
	  echo "<td >" .$row['anounce'] ."</td>" ;
        echo"</tr>";
        
        }?>
                           <font color="brown" size="6" style="bold" face="forte">LAND MANAGEMENT
                            <br> SYSTEM
                            <br><img src="img/pras.png">LMS</font>
                         
                            <u><h1>Messages from ADMIN</h1></u>

                        </td></tr>
                        <tr><th colspan="2"></th></tr>
                        </table>
    <br><center><font color="black">&COPY;Derrick Munezero</font>
</html>