
<?php
include "mysqlconnect.php";
include "redirect.php";

echo "where";

$email=$_POST['email'];
$pass=$_POST['pass'];

$sql="Select pass from user_login where email='$email' ";

echo $email;


$result=mysql_query($sql) or die("Error");
$row=mysql_num_rows($result); //for number of rows
$var=mysql_fetch_array($result);

echo $row;

if($row == 0)
{	
	echo "<script type=\"text/javascript\">
	alert(\"Wrong Login ID\")</script>";
	echo "Redirecting Back...";
	redirect("login.php") ;
}
else if($pass == $var[0])
{
	session_start();
	$_SESSION['email'] = $email;
	echo "Redirecting To You review  Page...";
	redirect("post_review.php");
}
else {
		echo "<script type=\"text/javascript\">
		alert(\"Wrong Password\")</script>";
		echo "Redirecting Back...";
		redirect("login.php") ;
}
mysql_close();
?>