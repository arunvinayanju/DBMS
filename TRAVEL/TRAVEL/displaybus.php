<style>
	h1
	{
		padding: 40px;
	}
	td,th
	{
		padding: 20px;
		font-weight: bold;
	}
</style>
<!DOCTYPE html>
<html>
<title>Display Buses</title>
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
<body background="o1.jpg">
<center>
<div class="text-center py-5">
<a href="index.html"><h4>Go Back To Home Page</h4></a>
</div>
	<h1>
		The Bus Details Are As Follows
	</h1>
<?php
include("connection2.php");
$query = "SELECT * FROM BUS";

$data = mysqli_query($conn2,$query);

$total = mysqli_num_rows($data);

if($total!=0)
{
	?>
	<table>
		<tr>
			<th>Bus No</th>
			<th>Route Name</th>
			<th>INSURANCE DATE</th>
			<th>Body No</th>
			<th>Update</th>
			<th>Remove</th>
		</tr>

	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				 <td>".$result['BUSNO']."</td>
				 <td>".$result['ROUTENAME']."</td>
				 <td>".$result['INSURANCEDATE']."</td>
				 <td>".$result['BODYNO']."</td>
				 <td><a href='updatebus.php?bn=$result[BUSNO]&rn=$result[ROUTENAME]&ind=$result[INSURANCEDATE]&bon=$result[BODYNO]'>Edit</a></td>
				 <td><a href='deletebus.php?bn=$result[BUSNO]' onclick='return checkdelete()'>Delete</a></td>
			 </tr>";
	}
}
else{
		echo "No record found";
	}	
?>
</table>
<script >
	function checkdelete()
	{
		return confirm('Are you sure you want to delete?')
	}
</script>
</center>
</body>
</html>