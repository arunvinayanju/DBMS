<!DOCTYPE html>
<?php
include 'connection2.php';
error_reporting(0);
?>
<html>
<head>
	<title>Passenger Update</title>
 	<style>
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
		input
		{
			margin: 10px;
			color: blue;
		}
 	</style>
</head>
<body background="b1.jpg">
	<center>
		<a href="index.html"><h4>Go Back To Home Page</h4></a>
	<center>
		<h1>
			Enter The Updated Passenger Details
		</h1>
<form action="" method="GET">
	PASSENGER NUMBER <input type="text" name="pnum" value="<?php echo $_GET['pn'];?>"/><br><br>
	PASSENGER NAME <input type="text" name="pname" value="<?php echo $_GET['nm'];?>"/><br><br>
	PASSENGER MOBILE <input type="text" name="pmobile" value="<?php echo $_GET['mn'];?>"/><br><br>
	PASSENGER ADDRESS <input type="text" name="paddr" value="<?php echo $_GET['ad'];?>"/><br><br>
	BUS NUMBER <input type="text" name="busno" value="<?php echo $_GET['bn'];?>"/><br><br>
	PASSENGER AMOUNT <input type="text" name="amount" value="<?php echo $_GET['pc'];?>"/><br><br>
	PASSENGER  ROUTENAME<input type="text" name="routename" value="<?php echo $_GET['rn'];?>"/><br><br>
	PASSENGER  TIME<input type="time" name="ptime" value="<?php echo $_GET['ti'];?>"/><br><br>
	<input type="submit" name="Update" value="Update">
</form>
<?php
include("connection2.php");
if($_GET['Update'])
{
	$pno = $_GET['pnum'];
	$nma = $_GET['pname'];
	$mno = $_GET['pmobile'];
	$add = $_GET['paddr'];
	$bno = $_GET['busno'];
	$pce = $_GET['amount'];
	$rtn = $_GET['routename'];
	$tie = $_GET['ptime'];
	include 'connection2.php' ;
	$query = "UPDATE PASSENGER SET PNAME='$nma',MOBILENO='$mno',ADDRESS='$add',BUSNO='$bno',AMOUNT='$pce',ROUTENAME='$rtn',PTIME='$tie' WHERE PNO='$pno'";
	$data = mysqli_query($conn2,$query);
	if($data)
	{
		echo "<font color='BLACK'>Record Updated Successfully <a href='http://localhost/TRAVEL/displaypassenger.php'>Check Updated List Here</a>";
	}
	else
	{
		echo "<font color='red'>Not Updated <a href='http://localhost/TRAVEL/displaypassenger.php'>Check List Here</a>";
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