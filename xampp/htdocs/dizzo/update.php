<html>

    <head>
        <title>Update a Record in MySQL Database</title>
    </head>

    <body>
        <?php /*
          if (isset($_POST['update'])) {
          $servername = "localhost";
          $username = "root";
          $password = "";

          // Create connection
          $conn = mysql_connect($servername, $username, $password) or die(mysql_error());
          // select db
          mysql_select_db("dizzo", $conn) or die(mysql_error());


          if (!$conn) {
          die('Could not connect: ' . mysql_error());
          }

          $Id = $_POST['Id'];
          $Firstname = $_POST['Firstname'];
          $Lastname = $_POST['Lastname'];
          $Email = $_POST['Email'];
          $Phone = $_POST['Phone'];

          $sql = "UPDATE customer SET Firstname= $Firstname ,Lastname=$Lastname,Email=$Email,Phone=$Phone.
          WHERE Id= $Id";
          mysql_select_db('dizzo');
          $retval = mysql_query($sql, $conn);

          if (!$retval) {
          die('Could not update data: ' . mysql_error());
          }
          echo "Updated data successfully\n";

          mysql_close($conn);
          } else {
         */
// ?>

        <?php
  
       
        
        if (isset($_POST['update'])) {
                 // Connect to database server
   $conn=mysqli_connect("127.0.0.1", "root", ""); 
        if (!$conn) {
            die('can not connect:' . mysqli_error());
        }
        mysqli_select_db($conn, 'dizzo') or die(mysqli_error($conn));
            $Id = $_POST['Id'];
            $Firstname = $_POST['Firstname'];
            $Lastname = $_POST['Lastname'];
            $Email = $_POST['Email'];
            $Phone = $_POST['Phone'];

            $sqli = "UPDATE customer SET Firstname='$Firstname',Lastname='$Lastname',Email='$Email',Phone='$Phone' WHERE Id='$Id'";

            if (mysqli_query($conn, $sqli)) {
                
            } else {
                echo"not updated";
            }


            mysqli_close($conn);
        }
            ?>

            <form action = "update.php" method = "post" >
                <table width = "400" border =" 0" cellspacing = "1" 
                       cellpadding = "2">

                    <tr>
                        <td width = "100">Id</td>
                        <td><input name = "Id" type = "text" 
                                   id = "Id"></td>
                    </tr>

                    <tr>
                        <td width = "100">Firstname</td>
                        <td><input name = "Firstname" type = "text" 
                                   id = "Firstname"></td>
                    </tr>
                    <tr>
                        <td width = "100">Lastname</td>
                        <td><input name = "Lastname" type = "text" 
                                   id = "Lastname"></td>
                    </tr>
                    <tr>
                        <td width = "100">Email</td>
                        <td><input name = "Email" type = "text" 
                                   id = "Email"></td>
                    </tr>
                    <tr>
                        <td width = "100">Phone</td>
                        <td><input name = "Phone" type = "text" 
                                   id = "Phone"></td>
                    </tr>

                    <tr>
                        <td width = "100"> </td>
                        <td> </td>
                    </tr>

                    <tr>
                        <td width = "100"> </td>
                        <td>
                            <input name = "update" type = "submit" 
                                   id = "update" value = "Update">
                        </td>
                    </tr>

                </table>
            </form>
       

    </body>
</html>