<?php
include "mysqlconnect.php";

$source=$_POST['sname'];
$destination=$_POST['dname'];
$date=$_POST['date'];
$time=$_POST['time'];

//echo $name,$email,$phone,$pass,$age,$rating,$carmodel;

$sql="insert into supply_table Values('$source','$destination',$date,$time)";

mysql_query($sql) or die("error3");
 
  
 session_start();
 
 $_SESSION['handle']=$email;
 }
  redirect("/login/after_login_register_asD.php");
mysql_close();
session_destroy();
?>



