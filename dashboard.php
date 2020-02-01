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
		<th>bookid</th>
		<th>name</th>
		<th>author</th>
		<th>year</th>
		<th>category</th>
		<th>price</th>
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
 $sql=("select*FROM books");
 $res=$conn->query($sql);
 if($res->num_rows >0){
 	

while($row=$res->fetch_assoc()){

 ?>
 <tr>
 	<td><?php echo $row['bookid'];?></td>
 	<td><?php echo $row['name'];?></td>
 	
 	<td><?php echo $row['author'];?></td>
 	
 	<td><?php echo $row['year'];?></td>
 	<td><?php echo $row['category'];?></td>
 	<td><?php echo $row['price'];?></td>
 	<td><a href="update.php">update</a></td>
 	<td><a href="delete.php">delete</a></td>
 
 	</tr>
 <?php } ?>
</table>
<?php } ?>
<a href="addbook.php">click here to Add book</a><br>
</body>
</html>