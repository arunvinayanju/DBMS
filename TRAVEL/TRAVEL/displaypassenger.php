<style>
	h1
	{
		padding: 60px;
	}
	td,th
	{
		padding: 20px;
		font-weight: bold;
	}
</style>
<!DOCTYPE html>
<html>
<title>Display Passengers</title>
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
<!--<body background="y1.png">-->
<body background="o1.jpg">
	<center>
<div class="text-center py-2">
<a href="index.html"><h4>Go Back To Home Page</h4></a>
</div>
	<h1>
		The Passenger Details Are As Follows
	</h1>
<?php
include("connection2.php");
$query = "SELECT * FROM PASSENGER";

$data = mysqli_query($conn2,$query);

$total = mysqli_num_rows($data);

if($total!=0)
{
	?>
	<table>
		<tr>
			<th>Passenger Number</th>
			<th>Passenger Name</th>
			<th>Mobile Number</th>
			<th>Passenger Address</th>
			<th>Bus Number</th>			
			<th>Amount</th>			
			<th>Routename</th>			
			<th>Time</th>			
			<th>Update</th>
			<th>Remove</th>
		</tr>
    
	<?php
	while($r = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				 <td>".$r['PNO']."</td>
				 <td>".$r['PNAME']."</td>
				 <td>".$r['MOBILENO']."</td>
				 <td>".$r['ADDRESS']."</td>
				 <td>".$r['BUSNO']."</td>			 
				 <td>".$r['AMOUNT']."</td>			 
				 <td>".$r['ROUTENAME']."</td>			 
				 <td>".$r['PTIME']."</td>			 
				 <td><a href='updatepassenger.php?pn=$r[PNO]&nm=$r[PNAME]&mn=$r[MOBILENO]&ad=$r[ADDRESS]&bn=$r[BUSNO]'>Edit</a></td>
				 <td><a href='deletepassenger.php?pn=$r[PNO]' onclick='return checkdelete()'>Delete</a></td>
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

 <!--<button class="btn">Edit</button>
		         <button class="btn">Delete</button>-->