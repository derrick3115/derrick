<?php
// MySQL connection variables
// Server name 
$hostname = "localhost";
// Name of the MySQL database
$database = "reg";
// Login mysql user
$username = "root";
// Login mysql password
$password = "";

// Connection String
$conn = mysql_connect($hostname, $username, $password);
// MySQL select database
mysql_select_db($database, $conn);

         if(isset($_POST['ohereza'])){
 $me1=$_POST['me1'];
 $irangamimerere=$_POST['irangamimerere'];
 $id1=$_POST['id1'];
 $akarere=$_POST['akarere'];
 $umurenge=$_POST['umurenge'];
 $akagari=$_POST['akagari'];
 $umudugudu=$_POST['umudugudu'];
 $telefoni=$_POST['telefoni'];
 $email=$_POST['email'];
 $upi1=$_POST['upi1'];
 $upi2=$_POST['upi2'];
 $upi3=$_POST['upi3'];
 $intara=$_POST['intara'];
 $akarere3=$_POST['akarere3'];
 $umurenge3=$_POST['umurenge3'];
 $akagari3=$_POST['akagari3'];
 $ibisobanuro=$_POST['ibisobanuro'];

 $sql=mysql_query("insert into form2 (`me1`,`irangamimerere`,`id1`,`akarere`,`umurenge`,`akagari`,`umudugudu`,`telefoni`,`email`,`upi1`,`upi2`,`upi3`,`intara`,`akarere3`,`umurenge3`,`akagari3`,`ibisobanuro`)
values('$me1','$irangamimerere','$id1','$akarere','$umurenge','$akagari','$umudugudu','$telefoni','$email','$upi1','$upi2','$upi3','$intara','$akarere3','$umurenge3','$akagari3','$ibisobanuro')");

         
if(!$sql)
{
echo'umuturage ntiyanditswe.';
}
else
{
echo "<META http-equiv=refresh content=4;URL=success2.php>";

}
}

mysql_close ($conn);
      ?>
<html>
    <head>
        <title>Form2</title>
         <style type="text/css">
        @import url("css/1reg.css");
        </style>
    </head>
    <body>
        
        <div class="loginbox12">
           <form action="2reg.php"method="post">
                <h1>INYANDIKO ISABA GUHUZA UBUTAKA</h1>
            <h2>Umwirondoro</h2>
            
            Njyewe/Twebwe: 
            <input class="input" type="text" name="me1" placeholder="Nme........"><br>
                Irangamimerere: 
                <input class="input" type="text" name="irangamimerere" placeholder="........"><br>
                Indangamuntu/Pasiporo: 
                <input class="input" type="number" name="id1" placeholder="........."><br>
                Akarere:
                <input class="input" type="text" name="akarere" placeholder="........."><br>
                Umurenge wa :
                <input class="input" type="text" name="umurenge" placeholder="........."><br>
                Akagari ka :
                <input class="input" type="text" name="akagari" placeholder="........."><br>
                Umudugudu wa :
                <input class="input" type="text" name="umudugudu" placeholder="........."><br>
                Telefoni :
                <input class="input" type="number" name="telefoni" placeholder=".........."><br>
                E-mail: 
                <input class="input" type="email" name="email" placeholder=".........."><br>
               
                <p>Ndasaba kugabanyamo ikibanza/isambu:</p>
                 
                <p>Amakuru ku kibanza/Isambu</p><br>
                
                Nimero y'ikibanza/isambu1 (UPI): 
                <input class="input" type="number" name="upi1" placeholder="..........." required=""><br>
                Nimero y'ikibanza/isambu2 (UPI): 
                <input class="input" type="number" name="upi2" placeholder="..........." required=""><br>
                Nimero y'ikibanza/isambu3 (UPI): 
                <input class="input" type="number" name="upi3" placeholder="..........." required=""><br>
                Intara:
                Intara:
               <select name="intara">
  <option value="Kigali">KIGALI</option>
  <option value="South">SOUTH</option>
  <option value="North">NORTH</option>
  <option value="West">WEST</option>
  <option value="East">EAST</option>
</select><br>
                Akarere: 
                <input class="input" type="text" name="akarere3" placeholder="............" required=""><br>
                Umurenge:
                <input class="input" type="text" name="umurenge3" placeholder="............" required=""><br>
                Akagari:
                <input class="input" type="text" name="akagari3" placeholder="............." required=""><br>
                <p>Ibisobanuro k'ubusabe bwo kugabanyamo ikibanza/Isambu</p><br>
                
                <textarea name="ibisobanuro" rows="3"cols="40" data-rule="required" data-msg="Please write something for us" placeholder="Ibisobanuro"value="<?php echo $ibisobanuro; ?>"></textarea>
<br><br>
                <input class="submit" type="submit" name="ohereza" value="ohereza">&nbsp
<input class="reset" type="reset" name="siba" value="clear">
        </form>
        </div>
    </body>
</html>