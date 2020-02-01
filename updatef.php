<?php 
if (isset($_POST['submit'])) {

$name = $_POST['name'];
$email     = $_POST['email'];
$pass      = $_POST['password'];
$mobile    = $_POST['mobile'];


$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "library";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
	die("connection failed: ".$conn->connect_error);
}
 echo "connect successfully";

$sql="UPDATE user SET name='$name', pass='$pass',mobile='$mobile'WHERE email='$email'";
if($conn->query($sql)===TRUE)
{
	echo"data Updated";
	header('Refresh: 5; URL=userdata.php'); // ye header function page ko refreh kar dega 5 sec baad on select.php
}

}
?>