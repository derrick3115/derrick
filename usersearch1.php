
<html>
    <head>
        <meta charset="utf-8" />
        <title>registration</title>
    <link rel="icon" type="jpg" href="lms2.png"> 
    <link href="css/1search.css" rel="stylesheet" type="text/css"/>
    </head>
        <body background="img/9.jpg">
            <center>
             <form class="form" action="usersearch1.php" method="POST">
                <h1>search</h1>:<input class="input" type="text" name="name"size=12><input class="submit" type="submit" name="search" value="find">

            <?php
            // Connect to database server
            
            if (isset($_POST["search"])){
            $conn = mysqli_connect("127.0.0.1", "root", "");
            if (!$conn) {
                die("can not connect" . mysqli_error());
            }
$name = $_POST['name'];
            // Select database
            mysqli_select_db($conn, 'lms');
            $query = "SELECT * FROM form1 WHERE me1 LIKE '%".$name."%'";
            //print $query;
            $answer = mysqli_query($conn, $query) or die(mysql_error());
            $count = mysqli_num_rows($answer);
            
            if ($count == 0) {
                echo("<script>alert('User not found!')</script>");
            } else {
                echo"<p><u><font color=white size=20>List of available:$name</u>";
                echo"<table border=1>";
                
                
            } ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<tr>
<th bgcolor='grey'>ID</th>
<th bgcolor='grey'>Njyewe/Twebwe</th>
<th bgcolor='grey'>Irangamimerere</th>
<th bgcolor='grey'>Indangamuntu/Pasiporo</th>
<th bgcolor='grey'>Akarere ka</th>
        <th bgcolor='grey'>Umurenge wa</th>
        <th bgcolor='grey'>Akagari ka</th>
        <th bgcolor='grey'>Umudugudu wa</th>
        <th bgcolor='grey'>Telefoni</th>
        <th bgcolor='grey'>E-mail</th>
        <th bgcolor='grey'>Nimero y'ikibanza/isambu (UPI)</th>
        <th bgcolor='grey'>Intara</th>
        <th bgcolor='grey'>Ibisobanuro</th>
                   <?php 
                $rs1=mysqli_query($conn,$query);
                 $row = mysqli_fetch_array($rs1,true);
                 $id=$row['id'];              
                while ($line = mysqli_fetch_object($answer)) {
                    $id = $line->id;
                    $me1 = $line->me1;
                    $irangamimerere = $line->irangamimerere;
                    $id1 = $line->id1;
                    $akarere= $line->akarere;
                    $umurenge = $line->umurenge;
                    $akagari = $line->akagari;
                    $umudugudu = $line->umudugudu;
                    $telefoni = $line->telefoni;
                    $email = $line->email;
                    $upi = $line->upi;
                    $intara = $line->intara;
                    $ibisobanuro = $line->ibisobanuro;
                    echo"<tr><td>$id</td><td>$me1</td><td>$irangamimerere</td><td>$id1</td><td>$akarere</td><td>$umurenge</td><td>$akagari</td><td>$umudugudu</td><td>$telefoni</td><td>$email</td><td>$upi</td><td>$intara</td><td>$ibisobanuro</td></tr>";
                }
            
            echo("</table");
            mysqli_close($conn);
            }
            ?>
        </form>
    </div>
</body>
</html>
