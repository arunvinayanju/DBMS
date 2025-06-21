<!DOCTYPE html>
<html>
<head>
	<title>passenger</title>
</head>
<body background="o1.jpg">
<?php
include "connection2.php";
$pno = $_GET['pn'];
$query = "DELETE FROM passenger WHERE PNO='$pno'";
$data = mysqli_query($conn2,$query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="1; URL=http://localhost/TRAVEL/displaypassenger.php">
	<?php
}
else
{
	echo "<font color='red>Data not deleted!";
}
?>
</body>
</html> 