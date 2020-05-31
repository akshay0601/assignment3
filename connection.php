<?php
$servername = "akshay3.mariadb.database.azure.com";
$username = "agramon@akshay3";
$password = "Akshay@123";

$conn = mysqli_connect($servername, $username, $password, "information");

if(!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}
echo "Connected Successfully"
?>