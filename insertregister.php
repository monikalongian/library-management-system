<?php
if(isset($_POST['submit']))
{

$name =$_POST['name'];
echo $name;
$email=$_POST['email'];
echo $email;
$pass=$_POST['pass'];
echo $pass;

$mobile=$_POST['mobile'];
echo $mobile;



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

$sql="INSERT INTO user(name,email,pass,mobile)VALUES('$name','$email','$pass','$mobile')";
if($conn->query($sql)===TRUE)
{
	echo"data inserted";
	header('Refresh:1;URL=login.html');
 }
}
?>
