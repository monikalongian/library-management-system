<!DOCTYPE html>
<head>
<title>database data</title>
<style>
	table{
		font-family:ariel,sans-serif;
		border-collapse: collapse;
		width:100%;
	}
	td,th
	{
		border:1px solid #dddddd;
		text-align:left;
		padding:8px;
	}
	tr:nth-child(even)
	{
		background-color:#dddddd;
	}
	</style>
</head>
<body>
<table>
	<tr>
		<th>name</th>
		<th>email</th>
		<th>pass</th>
		<th>mobile</th>
		<th>update</th>
		<th>delete</th>
	
		
	</tr>

<?php
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
 $sql=("select*FROM user");
 $res=$conn->query($sql);
 if($res->num_rows >0){
 	

while($row=$res->fetch_assoc()){

 ?>
 <tr>
 	<td><?php echo $row['name'];?></td>
 	<td><?php echo $row['email'];?></td>
 	
 	<td><?php echo $row['pass'];?></td>
 	
 	<td><?php echo $row['mobile'];?></td>
 	<td><a href="update.php?email=<?php echo$row['email'];?>">update</a></td>
 	<td><a href="delete.php?email=<?php echo$row['email'];?>">delete</a></td>
 	
 
 	</tr>
 <?php } ?>
</table>
<?php } ?>

</body>
</html>  