<html>
    <head><title>Welcome</title>
        <link rel="icon" type="image/png" href="img/lms2.png">
        <link href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="fonts/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css"/>
       
 

        
        <style type="text/css">
            @import url("css/home.css");
        </style>
    </head>
    
    <body bgcolor="wheat">
                <?php
        Session_start();
        if (!isset($_SESSION['username'])) {

            header('location:index.php');
        }
        ?>

        <br><br>
        <table border="0" align="center" >
            <tr><td colspan="3" >
            <center><img src="img/banner.jpg" alt=""/>
                </td></tr>
                <center><tr><td colspan="2" >
                            <ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <li><a href="homepage.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a></li>
                                <li><a><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Others</a>
                                    <ul>
                                        <li><a href="user.php">UMURENGE user</a></li>

                                    </ul>
                                </li>
                               
                                <li><a><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;Admin</a>
                                    <ul>
                                        <li><a href="createuser.php">Create user</a></li>
                                        <li><a href="viewuser.php">view users</a></li>
                                        <li><a href="view1reg.php">view Land records</a></li>
                                        <li><a href="anounce.php">Make anouncement</a></li>
                                         <li><a href="viewanounce.php">view anouncement</a></li>
                                          <li><a href="viewfeedback.php">view Comments</a></li>
                                         <li><a href="logout.php">Log out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </td></tr>
                    </tr>
                    <tr><td colspan="1" rowspan="1" >
                    <center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   
<img src="img/home.gif" width=370 height=250 >
                    </td>&nbsp&nbsp&nbsp<td colspan="1" rowspan="1" >
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="brown" size="6" style="bold" face="Elephant">LAND MANAGEMENT
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br> SYSTEM
                            <br><img src="img/pras.png">LMS</font>
                        </td></tr>
                        
                        </table><br>
    <center><b><font color="white">&COPY;Derrick Munezero</font></b>
                        </body>


                        </html>