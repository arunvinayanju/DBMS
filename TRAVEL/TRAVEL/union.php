<style>
	h1
	{
		padding: 40px;
	}
	td,th
	{
		padding: 10px;
	}
</style>
<!DOCTYPE html>
<html>
<title>GANDBUNION</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="port" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>
<body background="B.jpg">
	<center>
<div class="text-center py-2">
<a href="index.html"><h4>Go Back To Home Page</h4></a>
</div>
	<h1>
		Government and Bus Union Are As Follows
	</h1>
<?php
include("connection.php");
include("connection2.php");
$sql1 = "SELECT busno, routename, insurancedate, bodyno FROM bus";
// Query to select all details from the 'government' table
$sql2 = "SELECT deptname, ownerno, taxno FROM government";
// Execute the queries
$result1 = mysqli_query($conn2, $sql1);
$result2 = mysqli_query($conn, $sql2);
// Display results in a table
echo "<h2>Bus Details</h2>";
echo "<table>";
echo "<tr><th>Bus No</th><th>Route Name</th><th>Insurance Date</th><th>Body No</th></tr>";
while ($row1 = mysqli_fetch_assoc($result1))
 {
    echo "<tr><td>{$row1['busno']}</td><td>{$row1['routename']}</td><td>{$row1['insurancedate']}</td><td>{$row1['bodyno']}</td></tr>";
}
echo "</table>";
echo "<h2>Government Details</h2>";
echo "<table>";
echo "<tr><th>Dept Name</th><th>Owner No</th><th>Tax No</th></tr>";
while ($row2 = mysqli_fetch_assoc($result2)) 
{
    echo "<tr><td>{$row2['deptname']}</td><td>{$row2['ownerno']}</td><td>{$row2['taxno']}</td></tr>";
}
echo "</table>";
// Close connections
mysqli_close($conn);
mysqli_close($conn2);
?>
<script >
	function checkdelete()
	{
		return confirm('Are you sure you want to delete?')
	}
</script>
</center>
</body>
</html>