<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname2 = "travelmg";

$conn2 = mysqli_connect($servername,$username,$password,$dbname2);

if($conn2)
{
	echo "";
}
else
{
	echo "Connection Failed";
}
?>