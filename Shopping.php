<html>
<head>
<title>Data</title>
<style>
body{
	background-color:rgb(255,191,223);
}
h1{
	color:red;
	font-size:100px;
	font-style:italic;
	text-align:center;
	text-decoration:underline;
	text-shadow: 3px 2px yellow;
}
#div{
	border-style:double;
	border-color: blue;
	margin-left:370px;
	margin-right:370px;
}
#para{
	color:rgb(171,12,148);
	font-style:bold;
	font-size:20px;
	text-align:center;
	text-decoration:none;
}
</style>
</head>
<body>
<h1>Shoppee's</h1>
<p style="text-align:center">Please enter your details to log in.</p>
<form action="" method="post">
<div id="div">
<p id="para">Username : <input type="email" name="e" placeholder="emailId"></p><br>
<p id="para">Password : <input type="password" name="p" placeholder="password"></p>
<input type="submit" value="login" style="width:80px; height:40px; margin-left:170px">
<input type="reset" value="Clear" style="width:80px; height:40px"><br><br>

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
if(isset($_POST['e']) and isset($_POST['p'])){
		$e=$_POST['e'];
		$p=$_POST['p'];
		$query="SELECT * FROM Customer WHERE email='$e' AND pass='$p'";
		$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
		$count=mysqli_num_rows($result);
		if($count==1){
			$_SESSION['email']=$e;
			echo('<div style="margin-left:190px;">login successful</div>');
			echo('<br>');
		}
		else{
			
		}
}
/* if(isset($_SESSION['email'])){
	$email=$_SESSION['email'];
	
} */
else{}
?>
<button type="button" style="margin-left:210px; width:80px; height:40px; border-radius:8px "><a href="Home.html" style="text-decoration:none">Continue</a></button><br><br>
<p id="para">New User ?<a href="Login1.php"> Login....</a></p>
<p id="para"><a href="Home.html" style="text-decoration:none">Skip sign in?</a></p>
</div>
</body>
</html>