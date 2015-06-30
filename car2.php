<?php

$sname=$_POST['sname'];
$dname=$_POST['dname'];

//echo $sname;
//echo $dname;
?>

<html>
<body>
<style type="text/css">
body {
	          background-image:url("http://chasmic-research.com/wp-content/uploads/2014/07/I-ride-in-a-Carpool1.png");
	          background-repeat:no-repeat;
	            background-size:cover;
	            background-position: right;
	            background-size: 400px 400px;
	    }






</style>

<p> searching for Source ... <?= $sname ?> </p>
<p> and Destination ... <?= $dname ?> </p>
 <img src= "http://thumbs.dreamstime.com/z/carpooling-road-sign-promoting-36150092.jpg" height="100" width:"100">

</body>
</html>

<?php
$user = 'cfuser';
$pass = 'cfpass';
$dbh = new PDO('mysql:host=localhost;dbname=hack', $user, $pass);

if($dbh!=null) {
	
	//echo "connected to db\n";
	}
	else {
		echo "error\n";
	}


  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $q = <<<SQL
SELECT * FROM carpool_driver WHERE ( source = "$sname" and destination = "$dname") ;
SQL;

$sh = $dbh->prepare($q);
#$sh->bindValue(1, $argv[1]);
$sh->execute(array($argv[1]));



$rows = $sh->fetchAll();
#var_dump($rows);
?>
<html>
	<head>
    <title>result</title>
	</head>
	<body>
		<h2 style = "color:green " > Available Drivers : </h2>
		<style>
    	    p.ex1 {
	   	    margin-left: 2cm;
	   	    color: blue;
		   } 

		    p.ex2{
	   	    margin-left: 2cm;
	   	    color: red;
		   }
		   </style>

	<p class="ex2" > Name   &nbsp  License &nbsp    Rating &nbsp    Age 	&nbsp  CarMOdel  &nbsp    Time </p>
    <?php foreach ( $rows as $row) : ?>
        
	<p class="ex1"> <?= $row[0] ?> &nbsp  &nbsp <?= $row[1] ?> &nbsp &nbsp  <?= $row[2] ?>  &nbsp &nbsp  
		<?= $row[3] ?> &nbsp  &nbsp <?= $row[4] ?>  &nbsp &nbsp  <?= $row[7] ?>  </p>
    <?php endforeach; ?>
   
</body>
</html>






