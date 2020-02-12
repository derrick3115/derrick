<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="icon" type="image/x-png" href="auction/77.png">
</head>
<body background="back/b4.jpg">
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3><font color=blue>You are registered successfully.</font></h3><br/>Click here to <a href='index.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1><img src="icon/index.png" width="100"></h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<td colspan="2"><input type="password" name="password" placeholder="password"    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="use strong password at least one number and one uppercase and lowercase letter" required   onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false">
<input type="submit" name="submit" value="Register" />

<img src="icon/12.png" width="40">
<img src="icon/p3.png" width="40"></a>

</form>
<br /><br />

</div>
<?php } ?>

</body>
</html>
