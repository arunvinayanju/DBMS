<!DOCTYPE html>
<html>
<head>
	<title>Government</title>
</head>
<body background="o1.jpg">
<?php
include("connection.php");
$taxno = $_GET['tn'];
$query = "DELETE FROM government WHERE TAXNO='$taxno'";
$data = mysqli_query($conn,$query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="1; URL=http://localhost/TRAVEL/displaygovernment.php">
	<?php
}
else
{
	echo "<font color='red>Data not deleted!";
}
?>
</body>
</html>
