

<html>
    <head>
        <title>Form1</title>
        <link rel="icon" type="image/png" href="img/rw.png">
         <style type="text/css">
        @import url("css/1reg.css");
        </style>
    </head>
    <body>
        <a href="user.php"><img src="img/arrow.gif">back to homepage</a>
        <div class="loginbox12"> <center>  
                <form action="print.php"method="post" size="15">
                <p>INYANDIKO ISABA KWANDIKISHA IKIBANZA/ISAMBU</p>
                <p>Umwirondoro</p>
            <h1>Njyewe/Twebwe:</h1> 
            <input class="input" type="text" name="me1" placeholder="Nme........"><br>
            <br>
<h1>Indangamuntu/Pasiporo:</h1> 
<input class="input" type="tel" name="id1" placeholder="........." accept=""maxlength="16"minlength="16"><br>
                <h1>Intara:</h1>
               <select name="intara">
  <option value="Kigali">KIGALI</option>
  <option value="South">SOUTH</option>
  <option value="North">NORTH</option>
  <option value="West">WEST</option>
  <option value="East">EAST</option>
</select><br>
                <h1>Akarere:</h1>
                               <select name="akarere">
                                   <option selected hidden value="">hitamo akarere </option>

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
</select><br>
                <h1>Umurenge wa :</h1>
                <input class="input" type="text" name="umurenge" placeholder="........."><br>
                <h1>Akagari ka :</h1>
                <input class="input" type="text" name="akagari" placeholder="........."><br>
                <h1>Umudugudu wa :</h1>
                <input class="input" type="text" name="umudugudu" placeholder="........."><br>
                <h1>Telefoni :</h1>
                <input class="input" type="tel" name="telefoni" placeholder=".........." maxlength="10"minlength="10"><br>
               
                <h1><p>Nimero y'ikibanza/isambu :</p></h1> 
                <input class="input" type="tel" name="upi" placeholder=".........." maxlength="16"minlength="16"><br>
                
                <p>Ibisobanuro k'ubusabe bwo Kwandikisha ikibanza/Isambu</p><br>
                <textarea name="ibisobanuro" rows="3"cols="40" data-rule="required" data-msg="Please write something for us" placeholder="Ibisobanuro"value="<?php echo $ibisobanuro; ?>"></textarea>
<br><br>
                <input class="submit" type="submit" name="ohereza" value="ohereza">&nbsp
<input class="reset" type="reset" name="siba" value="clear">
        </form>
        </div>
    </body>
</html>
