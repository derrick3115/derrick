<!DOCTYPE html >
 <html>
 <head>
    <title>LMS</title>
    <link rel="icon" type="image/png" href="img/lms2.png">
 </head>
 <body>
     <form action="update1reg.php" method="POST">
        <table border="0">
 <tr><td align="center">Id:<input name="id" type="text" style="width:170px" placeholder="Id"></td></tr>
                <tr><td align="center">Njyewe/Twebwe: 
                <input class="input" type="text" name="me1" placeholder="Nme........"><br>
                <tr><td align="center">Irangamimerere: 
                <input class="input" type="text" name="irangamimerere" placeholder="........"><br>
                <tr><td align="center">Indangamuntu/Pasiporo: 
                <input class="input" type="number" name="id1" placeholder="........."><br>
                <tr><td align="center">Akarere:
                <input class="input" type="text" name="akarere" placeholder="........."><br>
                <tr><td align="center">Umurenge wa :
                <input class="input" type="text" name="umurenge" placeholder="........."><br>
                <tr><td align="center">Akagari ka :
                <input class="input" type="text" name="akagari" placeholder="........."><br>
                <tr><td align="center">Umudugudu wa :
                <input class="input" type="text" name="umudugudu" placeholder="........."><br>
                <tr><td align="center">Telefoni :
                <input class="input" type="number" name="telefoni" placeholder=".........."><br>
                <tr><td align="center">E-mail: 
                <input class="input" type="email" name="email" placeholder=".........."><br>
               
                <p>Ndasaba kugabanyamo ikibanza/isambu:</p>
                 
                <p>Amakuru ku kibanza/Isambu</p><br>
                
                <tr><td align="center">Nimero y'ikibanza/isambu (UPI): 
                <input class="input" type="number" name="upi" placeholder="..........."><br>
               <tr><td align="center">Intara:
               <select name="intara">
  <option value="Kigali">KIGALI</option>
  <option value="South">SOUTH</option>
  <option value="North">NORTH</option>
  <option value="West">WEST</option>
  <option value="East">EAST</option>
</select><br>
                <tr><td align="center">Akarere: 
                <input class="input" type="text" name="akarere3" placeholder="............" ><br>
                <tr><td align="center">Umurenge:
                <input class="input" type="text" name="umurenge3" placeholder="............"><br>
                <tr><td align="center">Akagari:
                <input class="input" type="text" name="akagari3" placeholder="............." ><br>
                <tr><td align="center"><p>Ibisobanuro k'ubusabe bwo kugabanyamo ikibanza/Isambu</p><br>
                <textarea name="ibisobanuro" rows="8"cols="40" data-rule="required" data-msg="Please write something for us" placeholder="Ibisobanuro"></textarea>
                
                </table>
 <?php
  // Connect to database server
    $conn=mysqli_connect("127.0.0.1", "root", ""); 
if(!$conn)
{
die ("can not connect".mysqli_error ());
}

    // Select database
    mysqli_select_db($conn,'reg');

    $test="UPDATE `form1` SET `me1`=[value-2],`irangamimere`=[value-3],`id1`=[value-4],`akarere`=[value-5],`umurenge`=[value-6],`akagari`=[value-7],`umudugudu`=[value-8],`telefoni`=[value-9],`email`=[value-10],`upi`=[value-11],`intara`=[value-12],`akarere3`=[value-13],`umurenge3`=[value-14],`akagari3`=[value-15],`ibisobanuro`=[value-16] WHERE id='$_POST[id]'";
    $answer=mysql_query($conn,$test);
    ?>
     </body>
 </html>