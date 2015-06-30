<?php
echo "sldjflsdj";
include"mysqlconnect.php";
include "redirect.php";
if(!isset($_SESSION['handle'])){
$pass=mysql_real_escape_string(htmlentities(trim($_POST['pass'])));
$name=$_POST['name'];
$email=$_POST['email'];
$repass=$_POST['repass'];
$phone=$_POST['phone'];
$sql="insert into user_login Values($name','email,'$pass','$phone','NULL')";

mysql_query($sql) or die("error3");
 
  
 session_start();
 
 $_SESSION['handle']=$email;
 }
  redirect("give_review.php");
mysql_close();
session_destroy();
?>

