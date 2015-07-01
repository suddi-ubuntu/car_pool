<?php
	echo "hell";
	$host="localhost";
	$usr="root";
	$pwrd="root";
	$l = mysql_connect($host,$usr,$pwrd) or die("Couldn't Connect!!!");


	mysql_select_db("carpool") or die("Couldn't Select DataBase");	
?>