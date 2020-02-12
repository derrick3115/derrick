<html>
	<head>
	<title>Displaying data from database </title>
	<link rel="icon" type="image/png" href="img/lms2.png">
        <link href="css/anounce.css" rel="stylesheet" type="text/css"/>
        <link href="css/anounce.css" rel="stylesheet" type="text/css"/>
	</head>
        <body background="img/eefff.jpg">
                    <?php
        Session_start();
        if(!isset($_SESSION['username'])){
            
          header('location:index2.php') ;
        }
        ?>       
        <center><h1>Abaturage</h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="search1reg.php"><img src="img/search.jpg"></a>
                    

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
	$strSQLi = "SELECT * FROM form1 ";

	// Execute the query (the recordset $rs contains the result)
	$rs = mysqli_query($conn,$strSQLi);
	
	// Loop the recordset $rs
	// Each row will be made into an array ($row) using mysql_fetch_array
        echo '<div id="pfd">';
	echo"<table id='pdfexport' border=1>";
	echo"<tr>";
        echo"<th bgcolor='grey'>ID</th>";
	echo"<th bgcolor='grey'>Njyewe/Twebwe</th>";
	
	echo"<th bgcolor='grey'>Indangamuntu/Pasiporo</th>";
        echo"<th bgcolor='grey'>Intara</th>";
	echo"<th bgcolor='grey'>Akarere ka</th>";
	echo"<th bgcolor='grey'>Umurenge wa</th>";
        echo"<th bgcolor='grey'>Akagari ka</th>";
        echo"<th bgcolor='grey'>Umudugudu wa</th>";
        echo"<th bgcolor='grey'>Telefoni</th>";
        echo"<th bgcolor='grey'>Nimero y'ikibanza/isambu </th>";
        echo"<th bgcolor='grey'>Ibisobanuro</th>";
        echo"</tr>";

	while($row = mysqli_fetch_array($rs)) {

	   // Write the value of the column Name (which is now in the array $row)
	  echo"<tr>";
          echo "<td>" .$row['id'] ."</td>" ;
          echo "<td >" .$row['me1'] ."</td>" ;
	  echo "<td >" .$row['id1'] ."</td>" ;
          echo "<td >" .$row['intara'] ."</td>" ;
	  echo "<td >" .$row['akarere'] ."</td>";
	  echo "<td >" .$row['umurenge'] ."</td>" ;
          echo "<td >" .$row['akagari'] ."</td>" ;
          echo "<td >" .$row['umudugudu'] ."</td>" ;
          echo "<td >" .$row['telefoni'] ."</td>" ;
          echo "<td >" .$row['upi'] ."</td>" ;          
          echo "<td >" .$row['ibisobanuro'] ."</td>" ;
          
         
  
          
echo"</tr>";
     

	  }
           echo '</table>';
 echo '</div>';
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
	
        
