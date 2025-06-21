<!DOCTYPE html>
<html>
<head>
	<title>Agent</title>
</head>
<body background="o1.jpg">
<?php
include("connection2.php");
$agno = $_GET['ano'];
$query = "DELETE FROM agent WHERE ANO='$agno'";
$data = mysqli_query($conn2,$query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="1; URL=http://localhost/TRAVEL/displayagent.php">
	<?php
}
else
{
	echo "<font color='red>Data not deleted!";
}
?>
</body>
</html>