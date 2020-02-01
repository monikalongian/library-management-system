<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

$email = $_GET['email'];

//echo $email;
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "library";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
	die("connection failed: ".$conn->connect_error);
}
// echo "connect successfully";

$sql = "SELECT name, pass, mobile FROM user WHERE email='$email'";

	 $res = $conn->query($sql);

	if ($res->num_rows >0){

		while ($row = $res->fetch_assoc()) {

			$name    = $row['name'];
			$password= $row['pass'];
			$mobile    = $row['mobile'];
			
			
		}
	} 
 ?> 

<h1>Update data for <?php echo $email; ?></h1>
<p> <?php echo $name ?> </p>
<form action="updatef.php" method="POST">
	name: <input type="text" name="name" value="<?php echo "$name" ?>"><br>

	email: <input type="text" name="email" value="<?php echo $email ?>" ><br>

	Password: <input type="text" name="password" value="<?php echo $password ?>"><br>

	Mobile : <input type="text" name="mobile" value="<?php echo $mobile ?>"><br>


	
	
	<input type="submit" name="submit">
</form>

</body>
</html>
