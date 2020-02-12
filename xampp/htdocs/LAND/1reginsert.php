<?php

//registering a login session
require 'db.php';
$message ='';
if (isset($_POST['id'])&& isset($_POST['me1'])&&isset($_POST['irangamimerere'])&& isset($_POST['id1'])&& isset($_POST['akarere'])&& isset($_POST['umurenge'])&& isset($_POST['akagari'])&& isset($_POST['umudugudu'])&& isset($_POST['telefoni'])&& isset($_POST['email'])&& isset($_POST['all1'])&& isset($_POST['me'])&& isset($_POST['id2'])&& isset($_POST['akarere2'])&& isset($_POST['umurenge2'])&& isset($_POST['akagari2'])&& isset($_POST['umudugudu2'])&& isset($_POST['telefoni2'])&& isset($_POST['email2'])&& isset($_POST['upi'])&& isset($_POST['intara'])&& isset($_POST['akarere3'])&& isset($_POST['umurenge3'])&& isset($_POST['akagari3'])&& isset($_POST['ibisobanuro'])) {
    
$id=$_POST['id'];
$me1=$_POST['me1'];
$irangamimerere=$_POST['irangamimerere'];
$id1=$_POST['id1'];
$akarere=$_POST['akarere'];
$umurenge=$_POST['umurenge'];
$akagari=$_POST['akagari'];
$umudugudu=$_POST['umudugudu'];
$telefoni=$_POST['telefoni'];
$email=$_POST['email'];
$all1=$_POST['all1'];
$me=$_POST['me'];
$id2=$_POST['id2'];
$akarere2=$_POST['akarere2'];
$umurenge2=$_POST['umurenge2'];
$akagari2=$_POST['akagari2'];
$umudugudu2=$_POST['umudugudu2'];
$telefoni2=$_POST['telefoni2'];
$email2=$_POST['email2'];
$upi=$_POST['upi'];
$intara=$_POST['intara'];
$akarere3=$_POST['akarere3'];
$umurenge3=$_POST['umurenge3'];
$akagari3=$_POST['akagari3'];
$ibisobanuro=$_POST['ibisobanuro'];

$sql = "INSERT INTO form1 (id,me1,irangamimerere,id1,akarere,umurenge,akagari,umudugudu,telefoni,email,all1,me,id2,akarere2,umurenge2,akagari2,umudugudu2,telefoni2,email2,upi,intara,akarere3,umurenge3,akagari3,ibisobanuro)
VALUES ('$id','$me1','$irangamimerere,'$id1','$akarere','$umurenge','$akagari','$umudugudu','$telefoni','$email','$all1','$me','$id2','$akarere2','$umurenge2','$akagari2','$umudugudu2','$telefoni2','$email2','$upi','$intara','$akarere3','$umurenge3','$akagari3','$ibisobanuro')";
$statement=$conn->prepare($sql);

if ($statement->execute(['id'=>$id,'me1'=>$me1,'irangamimerere'=>$irangamimerere,'id1'=>$id1,'akarere'=>$akarere,'umurenge'=>$umurenge,'akagari'=>$akagari,'umudugudu'=>$umudugudu,'telefoni'=>$telefoni,'email'=>$email,'all1'=>$all1,'me'=>$me,'id2'=>$id2,'akarere2'=>$akarere2,'umurenge2'=>$umurenge2,'akagari2'=>$akagari2,'umudugudu2'=>$umudugudu2,'telefoni2'=>$telefoni2,'email2'=>$email2,'upi'=>$upi,'intara'=>$intara,'akarere3'=>$akarere3,'umurenge3'=>$umurenge3,'akagari'=>$akagari3,'ibisobanuro'=>$ibisobanuro])) {
    $message ='data inserted successfully';    
    
}
    

?>