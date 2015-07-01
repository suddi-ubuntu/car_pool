<!DOCTYPE html>
<html>
<body>

<a href="/login/login.php" style="margin: 0 auto;display:block;color:red;ext-align:right">
	Login/Register as Driver </a> 
<a href="/login/loginU.php" style="margin: 0 auto;display:block;color:red;text-align:right">
	Login/Register as Seeker </a> 

<style type="text/css">
body {
	          background-image:url("https://upload.wikimedia.org/wikipedia/commons/8/88/Carpooling.jpg");
	          background-repeat:no-repeat;
	            background-size:cover;
	            background-position: right top;
	            background-size: 400px 600px;
	    }






</style>

<img align="top" src= "http://www.letscarpool.govt.nz/assets/Uploads/LetsCarpoolCarLogo2+.png" width="600" height="100">


<form action="car2.php" method="post" id="nameform" align =bottom>
  Source :      <input type="text" name="sname"><br>
  Destination : <input type="text" name="dname"><br>
</form>




<button type="submit" form="nameform" value="Submit">Submit</button>



<!--<p><b>Note:</b> The form attribute does not work in IE.</p> -->


</body>

</html>
