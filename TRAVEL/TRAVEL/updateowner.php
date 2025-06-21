<!DOCTYPE html>
<?php
include 'connection.php';
error_reporting(0);
?>
<html>
<head>
	<title>Owner Update</title>
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
		Enter The Updated Owner Details
	</h1>
<form action="" method="GET">
	OWNER NUMBER <input type="number" name="onum" value="<?php echo $_GET['owno'];?>"/><br><br>
	OWNER NAME <input type="text" name="oname" value="<?php echo $_GET['ownam'];?>"/><br><br>
	OWNER MOBILE <input type="text" name="omobile" value="<?php echo $_GET['owmobile'];?>"/><br><br>
	OWNER ADDRESS <input type="text" name="oaddr" value="<?php echo $_GET['owaddr'];?>"/><br><br>
	BUS NUMBER <input type="text" name="busno" value="<?php echo $_GET['owbusno'];?>"/><br><br>
	<input type="submit" name="Update" value="Update">
</form>

<?php
include "connection.php";
if($_GET['Update'])
{
	$ono = $_GET['onum'];
	$onao = $_GET['oname'];
	$mno = $_GET['omobile'];
	$add = $_GET['oaddr'];
	$bno = $_GET['busno'];
	$query = "UPDATE ownerdts SET OWNERNAME='$onao',MOBILENO='$mno',ADDRESS='$add',BUSNO='$bno' WHERE OWNERNO='$ono'";
	$data = mysqli_query($conn,$query);
	if($data)
	{
		echo "<font color='BLACK'>Record Updated Successfully <a href='http://localhost/TRAVEL/displayowner.php'>Check Updated List Here</a>";
	}
	else
	{
		echo "<font color='red'>Not Updated <a href='http://localhost/TRAVEL/displayowner.php'>Check List Here</a>";
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