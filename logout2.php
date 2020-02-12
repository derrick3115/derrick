<?php
session_start();
session_destroy();
//unset($_SESSION['manager']['pass']);
//unset($_SESSION['manager']['username']);
//echo session_id(); return;
header('location:index2.php');
?>

