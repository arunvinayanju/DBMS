<!DOCTYPE html>
<?php
include 'connection.php';
error_reporting(0);
?>
<html>
<head>
	<title>Government Update</title>
	<style>
		form
		{
			padding: 40px;
            font-size: large;
            font-weight: bold;
		}
		input
		{
			margin: 10px;
			color: blue;
		}
		h1
		{
			padding: 40px;
		}
	</style>
</head>
<body background="b1.jpg">
	<center>
		<a href="index.html"><h4>Go Back To Home Page</h4></a>
	<center>
		<h1>
			Enter The Updated Government Details
		</h1>
<form action="" method="GET">
	Department Name <input type="text" name="deptname" value="<?php echo $_GET['dn'];?>"/><br><br>
	Owner Number <input type="number" name="ownerno" value="<?php echo $_GET['on'];?>"/><br><br>
	Tax Number <input type="text" name="taxno" value="<?php echo $_GET['tn'];?>"/><br><br>
	<input type="submit" name="Update" value="Update">
	
</form>

<?php
include("connection.php");
if($_GET['Update'])
{
	$dna = $_GET['deptname'];
	$ono = $_GET['ownerno'];
	$tno = $_GET['taxno'];	
	$query = "UPDATE government SET DEPTNAME='$dna',OWNERNO='$ono' WHERE TAXNO='$tno'";
	$data = mysqli_query($conn,$query);
	if($data)
	{
		echo "<font color='BLACK'>Record Updated Successfully <a href='http://localhost/TRAVEL/displaygovernment.php'>Check Updated List Here</a>";
	}
	else
	{
		echo "<font color='red'>Not Updated <a href='http://localhost/TRAVEL/displaygovernment.php'>Check List Here</a>";
	}
}
else
{
	echo "<font color='BLACK'>Click update to save changes";
}
?>
</center>
</body>
</html>