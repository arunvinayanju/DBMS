<!DOCTYPE html>
<?php
include 'connection2.php';
error_reporting(0);
?>
<html>
<head>
<title>Bus Update</title>
	<style>
		input
		{
			margin: 10px;
		}
		h1
		{
			padding: 40px;
		}
		form
		{
			padding: 40px;
            font-size: large;
            font-weight: bold;
		}
	</style>
</head>
<center>
<body background="b1.jpg">
		<a href="index.html"><h4>Go Back To Home Page</h4></a>
	<h1>
			Enter The Updated Bus Details
		</h1>
<form action="" method="GET">
	BUS NO <input type="TEXT" name="busno" value="<?php echo $_GET['bn'];?>"/><br><br>
	ROUTE NAME <input type="text" name="routename" value="<?php echo $_GET['rn'];?>"/><br><br>
	INSURANCE DATE <input type="DATE" name="INSURANCEDATE" value="<?php echo $_GET['ind'];?>"/><br><br>
	BODY NO <input type="TEXT" name="bodyno" value="<?php echo $_GET['bon'];?>"/><br><br>
	<input type="submit" name="Update" value="Update">
	
</form>

<?php
include("connection2.php");
if($_GET['Update'])
{
	$bno = $_GET['busno'];
	$rna = $_GET['routename'];
	$indt = $_GET['INSURANCEDATE'];
	$bono = $_GET['bodyno'];	
	$query = "UPDATE bus SET ROUTENAME='$rna',INSURANCEDATE='$indt',BODYNO='$bono' WHERE BUSNO='$bno'";
	$data = mysqli_query($conn2,$query);
	if($data)
	{
		echo "<font color='BLACK'>Record Updated Successfully <a href='http://localhost/TRAVEL/displaybus.php'>Check Updated List Here</a>";
	}
	else
	{
		echo "<font color='red'>Not Updated <a href='http://localhost/TRAVEL/displaybus.php'>Check List Here</a>";
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