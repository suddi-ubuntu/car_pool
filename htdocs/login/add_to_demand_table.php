<?php
include "mysqlconnect.php";

$source=$_POST['sname'];
$destination=$_POST['dname'];


//echo $name,$email,$phone,$pass,$age,$rating,$carmodel;

$sql="insert into demand_table Values('$email',$source','$destination')";

mysql_query($sql) or die("error3");
 
  
 session_start();
 
 $_SESSION['handle']=$email;
 }
  redirect("/login/car2.php");
mysql_close();
session_destroy();
?>

