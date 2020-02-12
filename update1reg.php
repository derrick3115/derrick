<?php

$con=mysqli_connect('localhost','root','');
if (!$con)
{
	die ('can not connect:'. mysqli_error ());
}
mysqli_select_db($con,'lms') or die(mysqli_error($con));

   $id='';    
 $me1="";
 
 $id1="";
 $intara="";
 $akarere="";
 $umurenge="";
 $akagari="";
 $umudugudu="";
 $telefoni="";

 $upi="";
  $ibisobanuro='';
 

  if(isset($_POST['ohereza'])){
 
    
 
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
  
    
    
    $strSQLi = 'UPDATE form1 SET me1="'.$me1.'",id1="'.$id1.'",intara="'.$intara.'",akarere="'.$akarere.'",umurenge="'.$umurenge.'",akagari="'.$akagari.'",umudugudu="'.$umudugudu.'",telefoni="'.$telefoni.'",upi="'.$upi.'",ibisobanuro="'.$ibisobanuro.'"'; 
       
    $strSQLi .=" where id=".$_POST['id'];
    $rs= mysqli_query($con,$strSQLi);
        //print $strSQLi."<br>";
        print "<script>alert('Sucess update')</script>";

}

   

// SQL query
	$rs=null;
  
if (isset($_GET['id']) || isset($_POST['id'])){
    
    $id=isset($_GET['id'])?$_GET['id']:$_POST['id'];
    $strSQLi = "SELECT * FROM form1 where id=".$id;
        $rs= mysqli_query($con,$strSQLi);




if(isset($rs)){
    
  //  print $strSQLi;
 $row = mysqli_fetch_array($rs,true);
 $id=$row['id'];
 $me1=$row['me1'];
 
 $id1=$row['id1'];
 $intara=$row['intara'];
 $akarere=$row['akarere'];
 $umurenge=$row['umurenge'];
 $akagari=$row['akagari'];
 $umudugudu=$row['umudugudu'];
 $telefoni=$row['telefoni'];
 
 $upi=$row['upi'];
 $ibisobanuro=$row['ibisobanuro'];
  
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
        @import url("css/update1reg.css");
        </style>
    </head>
    <body>
        <div class="loginbox12">
        <form action="update1reg.php" name="form_upd" method="POST">
            <input type="hidden" name="id" value="<?php echo $id;?>" >
            <table border="0">
               
                        
                <tr><td align="center">Njyewe/Twebwe: 
                        <input class="input" type="text" name="me1" placeholder="Nme........" value="<?php echo $me1;?>"<br>
                
                <tr><td align="center">Indangamuntu/Pasiporo: 
                        <input class="input" type="tel" name="id1" placeholder="........." accept=""maxlength="16"minlength="16" value="<?php echo $id1;?>"<br>
                <tr><td align="center">Intara:
                        <select name="intara" value="<?php echo $intara;?>">
                            <option ><?php echo $intara;?></option>  
                            <option value="Kigali">KIGALI</option>
                              <option value="South">SOUTH</option>
                              <option value="North">NORTH</option>
                              <option value="West">WEST</option>
                              <option value="East">EAST</option>
                        </select><br>
                <tr><td align="center">Akarere:
                                      
                        
                              <select name="akarere" value="<?php echo $akarere;?>">
                            <option ><?php echo $akarere;?></option>

  <option>Ngoma</option>
<option>Kamonyi</option>
<option>Muhanga</option>
<option>Ruhango</option>
<option>Nyaruguru</option>
<option>Rubavu</option>
<option>Rutsiro</option>
<option>Nyarugenge</option>
<option>Gasabo</option>
<option>Kicukiro</option>
<option>Nyagatare</option>
<option>Musanze</option>
<option>Nyanza</option>
<option>Huye</option>
<option>Nyamagabe</option>
<option>Kayonza</option>
<option>Gisagara</option>	
<option>Kirehe</option>
<option>Nyamasheke</option>
<option>Rwamagana</option>	
<option>Ngororero</option>
<option>Burera</option>	
<option>Gicumbi</option>
<option>Nyabihu</option>	
<option>Karongi</option>
<option>Rusizi</option>	
<option>Gakenke</option>
<option>Bugesera</option>
<option>Gatsibo</option>
<option>Rulindo</option>
</select<br>
                <tr><td align="center">Umurenge wa :
                        <input class="input" type="text" name="umurenge" placeholder="........." value="<?php echo $umurenge ;?>"<br>
                <tr><td align="center">Akagari ka :
                        <input class="input" type="text" name="akagari" placeholder="........." value="<?php echo $akagari;?>"<br>
                <tr><td align="center">Umudugudu wa :
                        <input class="input" type="text" name="umudugudu" placeholder="........." value="<?php echo $umudugudu ;?>"<br>
                <tr><td align="center">Telefoni :
                        <input class="input" type="tel" name="telefoni" placeholder=".........." maxlength="10" minlength="10" value="<?php echo $telefoni;?>"<br>
                
                        <p>Ndasaba kugabanyamo ikibanza/isambu:</p>

                        <p>Amakuru ku kibanza/Isambu</p><br>

                <tr><td align="center">Nimero y'ikibanza/isambu (UPI): 
                        <input class="input" type="tel" name="upi" placeholder=".........." maxlength="16" minlength="16" value="<?php echo $upi ;?>"><br>
                
                                <tr><td align="center"><p>Ibisobanuro k'ubusabe bwo kugabanyamo ikibanza/Isambu</p><br>
                                    <input class="input" type="text" name="ibisobanuro" placeholder="..........." value="<?php echo $ibisobanuro ;?>"></tr>
                <tr>
                <input class="submit" type="submit" name="ohereza" value="ohereza">&nbsp
                <input class="reset" type="reset" name="siba" value="clear"> </tr>
            </table>
        </form>
        </div>
    </body>
</html>


