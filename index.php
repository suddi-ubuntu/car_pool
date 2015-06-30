<?php ?>
<html>
<head><title>home page</title></head>
<body>
<style type="text/css">
h1{
	color:green;
	text-align:center;
}
h2 {
	color:green;
	text-align:center;
}
p {
	text-align:center;
	color:green;
}
label {
	text-align:center;
	color:green;
}
body {
	text-align:center;
	background-image:url("http://www.clipartoday.com/_thumbs/034/S/Searching_3_tnb.png");
	background-repeat:no-repeat;
	background-size:347px 350px;
	background-position: left top;

}
#view:hover {
   background-color:#C0C0C0;
}
</style>
<h1>My Smart locality! </h1>
<h2>Welcome to "Smart Locality at BANGALORE"</h2>
<p><i>This is a smart locality mapper for Bangalore city.< /i></p>
<label for = "label">
Click the below button to enter your preferences and find the best area for you...<br>
<br>
</label>
<button id="view" style="color: #008000">Enter Preferences</button>
<script>
var btn = document.getElementById('view');
btn.addEventListener('click',function() {
	document.location.href = 'prefer.php';
});
</script>
</body>
</html>

