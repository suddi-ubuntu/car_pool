<?php
	echo "hell";
	$host="localhost";
	$usr="root";
	$pwrd="";
	$l = mysql_connect($host,$usr,$pwrd) or die("Couldn't Connect!!!");


	mysql_select_db("cfdb") or die("Couldn't Select DataBase");	
?>