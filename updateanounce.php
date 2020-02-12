<?php

$con=mysqli_connect('localhost','root','');
if (!$con)
{
	die ('can not connect:'. mysqli_error ());
}
mysqli_select_db($con,'lms') or die(mysqli_error($con));

   $id='';    
 $date="";
 $anounce="";
 
 

  if(isset($_POST['ohereza'])){
 
    
 
 $date=$_POST['date'];
 $anounce=$_POST['anounce'];
 
  
    
    
    $strSQLi = 'UPDATE anounce SET date="'.$date.'",anounce="'.$anounce.'"'; 
       
    $strSQLi .=" where id=".$_POST['id'];
    $rs= mysqli_query($con,$strSQLi);
       // print $strSQLi."<br>";
        print "<script>alert('Sucess update')</script>";

}

   

// SQL query
	$rs=null;
  
if (isset($_GET['id']) || isset($_POST['id'])){
    
    $id=isset($_GET['id'])?$_GET['id']:$_POST['id'];
    $strSQLi = "SELECT * FROM anounce where id=".$id;
        $rs= mysqli_query($con,$strSQLi);




if(isset($rs)){
    
  //  print $strSQLi;
 $row = mysqli_fetch_array($rs,true);
 $id=$row['id'];
 $date=$row['date'];
 $anounce=$row['anounce'];
 
  
  //echo "Name :".$_POST['me1']."  irajg..:".$_POST['irangamimerere']." id1:".$_POST['id1']."   ";
  }
}
//while ($row = mysqli_fetch_array($rs, true)) 
    ?>

    <html>
    <head>
        <title>LMS</title>
        <link rel="icon" type="image/png" href="img/lms2.png">
    <style type="text/css">
        @import url("css/user.css");
        </style>
    </head>
    <body>
        <div class="loginbox12">
            <form action="updateanounce.php" name="form_upd" method="POST">
            <input type="hidden" name="id" value="<?php echo $id;?>" >
            <table border="0">
               
                        
                <tr><td align="center">Date: 
                        <input class="input" type="date" name="date" placeholder="Nme........" value="<?php echo $date;?>"><br>
                <tr><td align="center">Anounce: 
                        <input class="input" type="text" name="anounce" placeholder="........" value="<?php echo $anounce;?>"><br>
                
                <tr>
                <input class="submit" type="submit" name="ohereza" value="ohereza">&nbsp
                <input class="reset" type="reset" name="siba" value="clear"> </tr>
            </table>
        </form>
        </div>
    </body>
</html>


