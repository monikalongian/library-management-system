<?php
$email = $_GET['email'];

$servername="localhost";
$username="root";
$password="";
$dbname="library";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die('connection failed:'.$conn->connect_error);
}
 echo "connect successfully";

$sql="DELETE FROM user WHERE email='$email'";
if($conn->query($sql)===TRUE)
{
	echo"record deleted successfully";
	header('Refresh: 2; URL=userdata.php');
 }
else{
	echo"error deleting record:".$conn->error;
}
$conn->close();
?>
