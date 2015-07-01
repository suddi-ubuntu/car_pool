<?php

if(isset($_session['email']))
	redirect('/login/login.php');

?>


<form action="/login/more_demand.php" method="Post">

		 <input type="submit" value="Enter a query" name="submit"> 
		 
</form>

<form action="car1.php" method="Post">

		
		  <input type="submit" value="See earlier query and their status" name="submit"> 
		 
</form>












