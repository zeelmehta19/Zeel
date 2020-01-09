<html>
<body>

<form method="post" action="">
<table align="center">
<tr>
<td>Emailid</td> <td><input type="email" name="e" placeholder="Email Id" required/></td>
</tr>

<tr>
<td>Password</td> <td><input type="password" name="p" placeholder="Password"required/></td>
</tr>

<tr>
<td colspan=2><input type="submit" name="login" value="login"></td>
</tr>
</table>
</form>

<?php 
session_start();

$sn="localhost";
$un="root";
$pswd= "";
$dbn= "shopping";

$conn=new mysqli($sn, $un, $pswd, $dbn);

if($conn->connect_error)
{
	die("connection failed:". $conn->connect_error);
	
}
if (isset($_POST['e']) and isset($_POST['p'])){

$e = $_POST['e'];
$p = $_POST['p'];

$query = "SELECT * FROM `customer` WHERE email='$e' and password='$p'";

$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if($count==1)
{
	$_SESSION['email'] = $e;
}
else
{
$inv = "Invalid Login Credentials.";
echo " ".$inv;
}
}
if (isset($_SESSION['email']))
{
$email = $_SESSION['email'];
echo "Hello " . $email . "
";
echo "<a href='#'>Logout</a>";
 
}else{}

?>
	


</body>
</html>
<form action="" method="post">
<input type="email" name="e" placeholder="emailId">
<input type="password" name="p" placeholder="password">
<input type="button" value="check" name="check" onclick="check()">
<input type="submit" value="login">
</form> 
