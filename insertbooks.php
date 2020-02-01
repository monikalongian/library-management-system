<?php
if(isset($_POST['submit']))
{
$bookid=$_POST['bookid'];
echo $bookid;
$name =$_POST['name'];
echo $name;
$author=$_POST['author'];
echo $author;
$year=$_POST['year'];
echo $year;
$category=$_POST['category'];
echo $category;
$price=$_POST['price'];
echo $price;


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

$sql="INSERT INTO books(bookid,name,author, year, category,price)VALUES('$bookid','$name','$author','$year','$category','$price')";
if($conn->query($sql)===TRUE)
{
	echo"data inserted";
	header('Refresh:5;URL=dashboard.php');

 }
}
?>
