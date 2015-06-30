<!DOCTYPE html>
<html>
<?php
//include "redirect.php";
session_start();
//if(isset($_SESSION['email']))
//redirect("post_review.php");
?>

	<head>
		<title>Welcome to carpool Login And Sign Up</title>
		<link rel="stylesheet" href="login.css"/>
<script>
		
function tfunc()
{
var x=document.getElementById("searchdiv");
x.style.width="31em";	
x.style.background="#F0F0F0";
x.style
}



function checkForm(form) 
{
if(form1.handle.value == '') 
{ 
	alert("Error: handle is empty!");
	form.handle.focus();
	return false; 
	}
 var re = /^[\w ]+$/; 
 if(!re.test(form1.handle.value)) 
 { 
 alert("Error: handle contains invalid characters!"); 
 form.handle.focus(); return false; 
 }
 if(form1.name.value == '') 
{ 
	alert("Error: name is empty!");
	form.name.focus();
	return false; 
	}
 var re = /^[\w ]+$/; 
 if(!re.test(form1.name.value)) 
 { 
 alert("Error: name contains invalid characters!"); 
 form.name.focus(); return false; 
 }
 
 if(form1.email.value == '') 
{ 
	alert("Error: Email is empty!");
	form.email.focus();
	return false; 
	}
 var re = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
 if(!re.test(form1.email.value)) 
 { 
 alert("Error: Email contains invalid characters!"); 
 form.email.focus(); return false; 
 }
 
 if(form1.pass.value == '') 
{ 
	alert("Error: Password is empty!");
	form.pass.focus();
	return false; 
	}
 var re = /^[\w ]+$/; 
 
 if(!re.test(form1.pass.value)) 
 { 
 alert("Error: Password contains invalid characters!"); 
 form.pass.focus(); return false; 
 }
 if(form1.pass.valu	e!=form1.repass.value)
{
alert("Error: Password doesn't match");
	form.repass.focus();
	return false; 

}
 
 if(form1.phone.value.length !=10 ) 
{ 
	alert("Error: Invalid Phone no");
	form.phone.focus();
	return false; 
	}

 
 return true; 
 } 

 
 
 function showHint(str1,str2)
{
var xmlhttp;
if(str1!=str2){
 document.getElementById("txtHint2").innerHTML="mis-matched";
 return ;}
else if (str1==str2){  document.getElementById("txtHint2").innerHTML="matched";
	return ;
	}
 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint2").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","mismatch.php",true);
xmlhttp.send();
}

function showHint2(str)
{
var xmlhttp;
if(str.length<5){
 document.getElementById("txtHint1").innerHTML="too short";
 return ;}
 else if(str.length>=5 && str.length<=8)
 {document.getElementById("txtHint1").innerHTML="medium";
 return ;
 }
 else if(str.length>=8){
 document.getElementById("txtHint1").innerHTML="strong"; return;}
 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

xmlhttp.open("GET","mismatch.php",true);
xmlhttp.send();
}
 
 


</script>
		
		<noscript>
        	
        	<style type="text/css">
				#Error
				{
					display:block;	
					font-size: 2em;
					text-align: center;
					padding: 200px;
					text-decoration: blink;
				}
				#container
				{
					display:none;
				}
			</style>
        </noscript>
</head>
<?php
	if(isset($_SESSION['id']))
	{
		header('Location : index.php');
		}
?>
<body>
	<div id="Error">
        	Please Enable Javascript!!!
   </div>
	<div id="container">
	<div id="header">
	<div id="content">
			 <h3>Sign in :</h3> 
			 <form action="loginf.php" method="post" id="form">
				<ul>
						<br>&nbsp;&nbsp;&nbsp;&nbsp;</br>
						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" placeholder="email id" size="30" width="20"  name="email" ></input></li>
						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" placeholder="password" size="30" width="20"  name="pass" ></input></li>
						<br>
						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="submit" value="GO"></li>
						</br>
						</ul>
			</form>
				
	</div>
	
	<div id="content1">
			<h3>Sign up :</h3> 
			 <form  action="signupf.php" method="post" id="form1" OnSubmit="return checkForm(this);">
				<ul>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;</br>
						
						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="name" size="30" width="20"   name="name" ></input></li>
						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" placeholder="email id" size="30" width="20"   name="email" ></input></li>
						 <span id="txtHint1" style="float:right;margin-right:34px;font-size:1.4em; margin-top:15px;color:#B80000"></span>
						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" placeholder="password"  size="30" width="20"  name="pass" onkeyup="showHint2(this.value)" ></input></li> 
						 <span id="txtHint2" style="float:right;margin-right:34px;font-size:1.2em; margin-top:15px;color:#B80000"></span>
						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" placeholder="confirm password" size="30" width="20"   name="repass"  onkeyup="showHint(pass.value,this.value)"></input></li> 
						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="phone" size="30" width="20"   name="phone" ></input></li>
						                    						
						<br>&nbsp;</br><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit"  form="form1" id="submit" value="GO" name="submit"></li>
						</ul>
			</form>
		
	</div>
		
</div>
	
</body>
</html>