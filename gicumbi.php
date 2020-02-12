<?php

$con=mysqli_connect('localhost','root','');
if (!$con)
{
  die ('can not connect:'. mysqli_error ());
}
mysqli_select_db($con,'registrationform') or die(mysqli_error($con));

   $id='';    
 $fname="";
 $mname="";
 $lname="";
 $address="";
 $gender="";
 $phone="";
 $email="";
 $username="";
 $password="";
  if(isset($_POST['ohereza'])){
 
    
 
 $fname=$_POST['fname'];
 $mname=$_POST['mname'];
 $lname=$_POST['lname'];
 $address=$_POST['address'];
 $gender=$_POST['gender'];
 $phone=$_POST['phone'];
 $email=$_POST['email'];
 $username=$_POST['username'];
 $password=$_POST['password'];

    $strSQLi = 'UPDATE form SET fname="'.$fname.'",mname="'.$mname.'",lname="'.$lname.'",address="'.$address.'",gender="'.$gender.'",phone="'.$phone.'",email="'.$email.'",username="'.$username.'",password="'.$password.'"'; 
       
     $strSQLi =" where id=".$_POST['id']."";
    $rs= mysqli_query($con,$strSQLi);
        print $strSQLi."<br>";
        print "<script>alert('Sucess update')</script>";

}

   

// SQL query
  $rs=null;
  
if (isset($_GET['id']) || isset($_POST['id'])){
    
    $id=isset($_GET['id'])?$_GET['id']:$_POST['id'];
    $strSQLi = "SELECT * FROM form where id=".$id;
        $rs= mysqli_query($con,$strSQLi);




if(isset($rs)){
    
  //  print $strSQLi;
 $row = mysqli_fetch_array($rs,true);
 $id=$row['id'];
 $fname=$row['fname'];
 $mname=$row['mname'];
 $lname=$row['lname'];
 $address=$row['address'];
 $gender=$row['gender'];
 $phone=$row['phone'];
 $email=$row['email'];
 $username=$row['username'];
 $password=$row['password'];
 
  
  //echo "Name :".$_POST['me1']."  irajg..:".$_POST['irangamimerere']." id1:".$_POST['id1']."   ";
  }
}
//while ($row = mysqli_fetch_array($rs, true)) 
    ?>

    <html>
    <head>
        <title>update</title>
        <link rel="stylesheet" type="text/css"  href="index.css" media="all">
<style type="text/css">
       body{
margin: 0 auto;
background-repeat:  no-repeat;
background-size: 100% 720px;
} 

.fabrice{
  width: 700px;
  height: 350px;
  text-align:center;
  margin: 0 auto;
  background-color:3333;
  border-radius: 30px;
  margin: 0 auto;
  margin-top: 5%;
}
table{
  top: 100px;
  margin-left: 30px;
}
</style>
</head>

<body>
<center>

<div class="fulltable" >
  <table width="1000" bgcolor="#1EEEEETTEYHFB">
    <tr>
      <td colspan="3">
          <img src="image/sk.png" width="1100" height="150">
      </td>
      </tr> 
          
          <table border="0">
        <input type="hidden" name="id" value="<?php echo $id;?>" >
        <form action="gicumbi.php" name="form_upd" method="POST">
         <center><h1><u>worker registration form</u></h1></center>               
               
               <tr>
<td>Name:</td>
<td><input type="text" name="fname"placeholder="enter your first name" value="<?php echo $fname;?>"required ></td>
<td><input type="text"name="mname"placeholder="enter your middle name" value="<?php echo $mname;?>"required ></td>
<td><input type="text"name="lname"placeholder="enter your last name" value="<?php echo $lname;?>"required ></td>
</tr>
<tr>
<td>Address:</td>
<td><input type="text"name="address"placeholder="enter your address" value="<?php echo $address;?>"required ></td>
</tr>
<tr>
<td>Gender:</td>
<td><input type="radio"name="gender" value="<?php echo $gender;?>"required >Male</td>
<td><input type="radio"name="gender" value="<?php echo $gender;?>"required >Female</td>
</tr>
<tr>
<td>Phone:</td>
<td><input type="tel"name="phone"placeholder="enter your phone no" value="<?php echo $phone;?>"required ></td>
</tr>
<tr>
<td>email:</td>
<td><input type="email"name="email"placeholder="example@example.com" value="<?php echo $email;?>"required ></td>
</tr>
<tr>
<td>username:</td>
<td><input type="text"name="username"placeholder="enter your username" value="<?php echo $username;?>"required ></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="text"name="password" value="<?php echo $password;?>"required ></td>
</tr>
<tr>
<td></td>
<td><input type="submit"name="ohereza"value="change"></td>
</tr>
            </table>
        </form>
        </div>
    </body>
</html>



