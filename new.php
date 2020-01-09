<?php
$conn=mysqli_connect("localhost","root"."");
if(!$conn){
	die("Oops! Pls learn how to connect");
}
else{
	echo("Connection established :)");
}
mysqli_close($conn);
?>