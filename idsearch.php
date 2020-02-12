
<html>
    <head>
        <meta charset="utf-8" />
        <title>registration</title>
    <link rel="icon" type="jpg" href="lms2.png"> 
    <link href="css/1search.css" rel="stylesheet" type="text/css"/>
    </head>
        <body bgcolor="skyblue">  
            <form class="form" action="idsearch.php" method="POST">
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
                echo"<p><u><font color=blue>your id of:.$name.</u>";
                echo"<table border=1>";
                
                
            } ?>
<tr>
<th bgcolor='grey'>ID</th>
<th bgcolor='grey'>Njyewe/Twebwe</th>

                <?php 
                $rs1=mysqli_query($conn,$query);
                 $row = mysqli_fetch_array($rs1,true);
                 $id=$row['id'];              
                while ($line = mysqli_fetch_object($answer)) {
                    $id = $line->id;
                    $me1 = $line->me1;
                    echo"<tr><td>$id</td><td>$me1</td>";
                }
            
            echo("</table");
            mysqli_close($conn);
            }
            ?>
        </form>
    </div>
</body>
</html>
