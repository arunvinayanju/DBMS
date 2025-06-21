<!DOCTYPE html>
<html>
<head>
	<title>Owners</title>
</head>
<body background="o1.jpg">
>
<?php
include "connection.php";
$ono = $_GET['ono'];
$query = "DELETE FROM ownerdts WHERE OWNERNO='$ono'";
$data = mysqli_query($conn,$query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="1; URL=http://localhost/TRAVEL/displayowner.php">
	<?php
}
else
{
	echo "<font color='red>Data not deleted!";
}
?>
</body>
</html>