<?php
	include_once 'connection.php';
?>

<?php
if(isset ($POST['Name'])&&($POST['Password'])&&($POST['Email'])&&($POST['Phone']))
{
	$name = $_POST['Name'];
	$password = $_POST['Password'];
	$email = $_POST['Email'];
	$phone = $_POST['Phone'];

	$quey = "INSERT INTO info VALUES(1, '$name', '$email', '$phone', 'password')";
	$data = mysqli_query($conn, $query);

	if($data)
	{
		echo "success";
		header("Location: search.php");
	}
	else
	{
		echo "failed";
	}
}
else
{
	include_once 'index.html';
}
?>