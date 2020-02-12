<html>
	<head>
	<title>Displaying data from database </title>
	<link rel="icon" type="image/png" href="img/lms2.png">
        <link href="css/anounce.css" rel="stylesheet" type="text/css"/>
	</head>
	<body background="img/eefff.jpg">
            
                    <?php
        Session_start();
        if(!isset($_SESSION['username'])){
            
          header('location:index.php') ;
        }
        ?>
                       

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
	echo"<table id='pdfexport' border=1>";
	echo"<tr>";
        echo"<th bgcolor='grey'>ID</th>";
	echo"<th bgcolor='grey'>Date</th>";
	echo"<th bgcolor='grey'>Anouncement</th>";
    echo"<th bgcolor='grey'>EDIT</th>";
    echo"<th bgcolor='grey'>DELETE</th>";
	echo"</tr>";

	while($row = mysqli_fetch_array($rs)) {

	   // Write the value of the column Name (which is now in the array $row)
	  echo"<tr>";
          echo "<td >" .$row['id'] ."</td>" ;
	   echo "<td >" .$row['date'] ."</td>" ;
	  echo "<td >" .$row['anounce'] ."</td>" ;
	  echo "<td><a href='updateanounce.php?id=".$row['id']."'><img src='img/settings1.png'width='90' height='40'</a></td>";
          echo "<td><a href='delanounce.php?id=".$row['id']."'><img src='img/delete3.png'width='90' height='40' ></td>";
         
  
          
echo"</tr>";
      echo '</div>';

	  }

	// Close the database connection
	mysqli_close($conn);
	?>
                    
	<!--<button >Submit</button> -->
  <li> <a href="javascript:PrintDiv('pdfexport')">Export to pdf</a> </li>
  
  
  </body>
	</html>

<script type="text/javascript">     
    function PrintDiv(htmlexportPDF) {    
       var divToPrint = document.getElementById(htmlexportPDF);
      // alert('Printing: Success');
       var popupWin = window.open('', '_blank', 'width=800,height=600');
       popupWin.document.open();
       popupWin.document.write('<style type="text/css">body{ margin:0.5px;');
       popupWin.document.write('font-family:verdana,Arial;color:#000;');
       popupWin.document.write('font-family:Verdana, Geneva, sans-serif; font-size:8px;}');
       popupWin.document.write('a{color:#000;text-decoration:none;}</style>');
       popupWin.document.write( divToPrint.outerHTML);
       popupWin.print();
       popupWin.document.close();
            }
 </script>     
	
        