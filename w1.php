<html>
<head>
<title>w1</title>
</head>
<style>
.button1:hover{
	color:yellow;
}
</style>
<body>
<img src="w1.jpg" alt="no image" style="margin-left:400px;" width="410px" height="470px"></img><br><br><br>
<form method="post" action="">
<p style="margin-left:300px; height:40px">Select your size :<select name="size" style="width:200px; height:35px">
<option>S</option>
<option>M</option>
<option>L</option>
<option>XL</option>
<option>Double XL</option>
<option>Triple XL</option>
</select></p>
<input type="submit" value="Add to Cart" class="button1" style="margin-left:300px; width:700px; height:50px; border-radius:13px; font-size:16px; background-color:rgb(64,0,128); color:white;"></input>
</form>
<button type="button" class="button1" style="margin-left:300px; width:700px; height:50px; border-radius:13px; font-size:16px; background-color:rgb(64,0,128); color:white;"><a href="Payment.html"  style="text-decoration:none; color:white">Proceed to Payment</a></button>
</body>
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
if(isset($_POST['size'])){
$size=$_POST['size'];
$email=$_SESSION['email'];
$query="insert into Custcart values('$email','$size','w1.jpg',250)";
$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
		
}
?>
</html>