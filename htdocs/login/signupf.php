<?php
//echo "sldjflsdj";
include"mysqlconnect.php";
include "redirect.php";
if(!isset($_SESSION['handle'])){
$pass=mysql_real_escape_string(htmlentities(trim($_POST['pass'])));
$name=$_POST['name'];
$email=$_POST['email'];
$repass=$_POST['repass'];
$phone=$_POST['phone'];
$age=$_POST['age'];
$rating=$_POST['rating'];
$carmodel=$_POST['carmodel'];

//echo $name,$email,$phone,$pass,$age,$rating,$carmodel;

$sql="insert into drivers Values('$name','$email',$phone,'$pass',$age,$rating,'$carmodel')";

mysql_query($sql) or die("error3");
 
  
 session_start();
 
 $_SESSION['handle']=$email;
 }
  redirect("/login/after_login_register_asD.php");
mysql_close();
session_destroy();
?>

