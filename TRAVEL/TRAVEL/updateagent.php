<!DOCTYPE html>
<?php
include 'connection2.php';
error_reporting(0);
?>
<html>
<head>
<title>Agent Update</title>
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
		<a href="index.html"><h4>Go Back To Home Page</h4></a>
	<center>
		<h1>
			Enter The Updated Agent Details
		</h1>
<form action="" method="GET">
	Agent Number <input type="TEXT" name="agno" value="<?php echo $_GET['ano'];?>"/><br><br>
	Agent Name <input type="text" name="aname" value="<?php echo $_GET['ana'];?>"/><br><br>
	Agent Address <input type="text" name="aadr" value="<?php echo $_GET['ad'];?>"/><br><br>
	<input type="submit" name="Update" value="Update">
	
</form>

<?php
if($_GET['Update'])
{
	$agn = $_GET['agno'];
	$ana = $_GET['aname'];
	$add = $_GET['aadr'];
	include 'connection.php';	
	$query1 = "UPDATE AGENT SET ANAME='$ana',ADDRESS='$add' WHERE ANO='$agn'";
	$data = mysqli_query($conn2,$query1);
	if($data)
	{
		echo "<font color='Black'>Record Updated Successfully <a href='http://localhost/TRAVEL/displayagent.php'>Check Updated List Here</a>";
	}
	else
	{
		echo "<font color='red'>Not Updated <a href='http://localhost/TRAVEL/displayagent.php'>Check List Here</a>";
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