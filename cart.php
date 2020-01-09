<html>
<head>
<title>Cart</title>
</head>
<body>
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
$email=$_SESSION['email'];
$query="select name from custcart where email='$email'";
$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $img=$row["name"];
		echo($img);
		echo('<img src="$img" alt="No img"></img>');
		echo('<img src="w1.jpg" alt="No img"></img>');
    }
	
	
}
mysqli_close($conn);	
	
?>

</body>
</html>