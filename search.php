<html>
<head>
	<style>
		table, th, td
		{
			border: 1px solid black;
		}
	</style>
	<title>secondary page</title>
</head>
<body>
	<h1> Search for Information! </h1>
	<br><br><br>
	<form action="search.php" method="post">
		<input type="text" name="id" class="search" placeholder="Search Here">
		<input type="submit" name="submit" class="submit" placeholder="Search">
	</form>
</body>
</html>
<?php
include_once 'connection.php';
if(iset ($_POST['id']));
{
	$search = $_POST['id'];
	$sql = "SELECT * FROM info where name LIKE '$search%'"
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_row($result) > 0)
	{
		echo'<table><tr><td><b>Name</b></td><td><b>Email</b></td><td><b>Phone Number</b></td><td><b>Password</b></td></tr>';
		while ($row = mysqli_fetch_assoc($result)) 
		{
			echo'<tr><td>'.$row["Name"].'</td><td>'.$row["Email"].'</td><td>'.$row["Phone"].'</td><td>'.$row["Password"].'</td><tr>';
		}
		echo'</table>';
	}
	else
	{
		echo"<br>No Information found";
	}
}
?>