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
<form name="f1" action="" method="post" >
<p id="para">
First Name : <input type="text" name="fn" required /><br>	<br><span id="nameloc"></span>
Middle Name : <input type="text" name="mn" /><br><br>
Last Name : <input type="text" name="ln" /><br><br>
<p id="p1">Create a strong password.</p>
Password : <input type="password" name="pass" required /><br><br><span id="passwordloc"></span>
Confirm Password : <input type="password" name="pass1" required /><br><br>
<p id="p1">Please enter a valid email address.</p>
Email Id : <input type="email" name="email"><br><br>
<input type="radio" name="gender" value="male"/>Male
<input type="radio" name="gender" value="female"/>Female<br><br>
Contact : <input type="tel" name="contact"><br><br>
<p id="p1">Enter your date of birth.</p>
DOB : <input type="date" name="dob"/><br><br>
City:<select name="city">
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
<?php
session_start();
$sn="localhost";
$un="root";
$pd="";
$dbn="shopping";
$conn=new mysqli($sn,$un,$pd,$dbn);
if($conn->connect_error){
	echo"Connection error";
}
else{
	
}
if(isset($_POST['fn']) and isset($_POST['pass']) and isset($_POST['pass1']) and isset($_POST['email'])){
	$fn=$_POST['fn'];
	$mn=$_POST['mn'];
	$ln=$_POST['ln'];
	$pass=$_POST['pass'];
	$pass1=$_POST['pass1'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$contact=$_POST['contact'];
	$dob=$_POST['dob'];
	$city=$_POST['city'];
	if($pass==$pass1){
	$query="insert into Customer(fn,mn,ln,pass,email,gender,contact,dob,city) values('$fn','$mn','$ln','$pass','$email','$gender','$contact','$dob','$city')";
	$result=mysqli_query($conn,$query);
	
	
}
else{
	echo("Password confirmation error");
}
}
else{
	
}
?>
<button id="b"style="width:80px; height:40px; border-radius:10px;"><a href="Home.html" style="text-decoration:none">Continue</a></button>
</fieldset>
</body>
</html>