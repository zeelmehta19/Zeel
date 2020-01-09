<html>
<head>
<title>Login</title>
<style>
h3{
	text-align:center;
}
#para{
	font-style:bold;
}
#p1{
	color:blue;
}
#b{
	background-color:pink;
	
}
#b:hover{
	background-color:blue;
	color:yellow;
}
<script>
function validate(){  
var name=document.f1.name.value;  
var password=document.f1.pass.value;  
var status=false;  
  
if(name.length<1){  
document.getElementById("nameloc").innerHTML=  
" <img src='unchecked.png'/> Please enter your name";  
status=false;  
}else{  
document.getElementById("nameloc").innerHTML=" <img src='checked.png'/>";  
status=true;  
}  
if(password.length<6){  
document.getElementById("passwordloc").innerHTML=  
" <img src='unchecked.png'/> Password must be at least 6 char long";  
status=false;  
}else{  
document.getElementById("passwordloc").innerHTML=" <img src='checked.png'/>";  
}  
return status;  
}  
</script>
</style>
</head>
<body bgcolor="aqua">
<h3>Please enter your details and login</h3>
<fieldset>
<form name="f1" action="Home.php" method="post" >
<p id="para">
First Name : <input type="text" name="fn" required /><br>	<br><span id="nameloc"></span>
Middle Name : <input type="text" name="mn" /><br><br>
Last Name : <input type="text" name="ln" /><br><br>
<p id="p1">Create a strong password.</p>
Password : <input type="password" name="pass" required /><br><br><span id="passwordloc"></span>
Confirm Password : <input type="password" name="pass1" required /><br><br>
<p id="p1">Please enter a valid email address.</p>
Email Id : <input type="email" name="email"><br><br>
<input type="radio" name="gender"/>Male
<input type="radio" name="gender"/>Female<br><br>
Contact : <input type="tel" name="contact"><br><br>
<p id="p1">Enter your date of birth.</p>
DOB : <input type="date" name="dob"/><br><br>
City:<select>
<option>Mumbai</option>
<option>Delhi</option>
<option>Bangalore</option>
<option>Chennai</option>
<option>Surat</option>
</select>
</p>
<input type="submit" value="Submit" id="b"style="width:80px; height:40px; border-radius:10px;">
<input type="reset" value="Clear" id="b" style="width:80px; height:40px; border-radius:10px;"><br><br>
</form>
</fieldset>
</body>
</html>