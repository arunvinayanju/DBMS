<!DOCTYPE html>
<html>
<head>
	<title>Bus</title>
</head>
<body background="o1.jpg">

<?php
include("connection2.php");
$busno = $_GET['bn'];
$query = "DELETE FROM BUS WHERE BUSNO='$busno'";
$data = mysqli_query($conn2,$query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="1; URL=http://localhost/TRAVEL/displaybus.php">
	<?php
}
else
{
	echo "<font color='red>Data not deleted!";
}
?>
</body>
</html>