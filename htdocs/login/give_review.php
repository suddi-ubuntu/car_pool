<?php

if(isset($_session['email']))
	redirect('/login/login.php');

?>


<form action="/login/more_postings.php" method="Post">

		 <input type="submit" value="Add more Postings" name="submit"> 
		 
</form>

<form action="post_review.php" method="Post">

		
		  <input type="submit" value="See Earlier Posts" name="submit"> 
		 
</form>

<form action="post_review.php" method="Post">
 
		   <input type="submit" value="See User Requests" name="submit"> 
</form>











