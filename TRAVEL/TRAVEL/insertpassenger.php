<?php
include 'connection2.php';
error_reporting(0);
?>
<html>

<head>
	<title>PASSENGER Insert</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="paddrnymous">
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="paddrnymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="port" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>
    <link rel="stylesheet" href="Stylee.css"/>
    <script src="index.js"></script>
	<style>
		
	body{
		background-color: #f5ed08;
	}
	.contact{
		padding: 2%;
		height: 100px;
	}
	.col-md-3{
		background: #000000;
		color:white;
		padding: 4%;
		border-top-left-radius: 0.5rem;
		border-bottom-left-radius: 0.5rem;
	}
	.contact-info{
		margin-top:10%;
	}
	.contact-info img{
		margin-bottom: 15%;
	}
	.contact-info h2{
		margin-bottom: 10%;
	}
	.col-md-9{
		background: #fff;
		padding: 3%;
		border-top-right-radius: 0.5rem;
		border-bottom-right-radius: 0.5rem;
	}
	.button{
		background: #001ca8;
		color:white;
	}
	.button:hover{
		color: #001ca8;
		background:white;
	}

	</style>
</head>
<body>
<div class="text-center py-5">
<a href="index.html"><h4>Go Back To Home Page</h4></a>
</div>
<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info text-center">
				<img src="female.svg" class="img-fluid" height="100px" width="100px" alt="image">
				<h5>Passenger Details</h5>
				<h6>Please enter the details!</h6>
			</div>
		</div>
		<div class="col-md-9">
		<form action="" method="GET">
			<!-- <div class="contact-form" method="GET" action=""> -->
				<div class="form-group py-2">
				  <label class="control-label col-sm-2" for="pnum">Passenger No:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="pnum" placeholder="Enter PASSENGER NUMBER" name="pnum">
				  </div>
				</div>
				<div class="form-group py-2">
				  <label class="control-label col-sm-2" for="pname">Passenger Name:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="pname" placeholder="Enter PASSENGER NAME" name="pname">
				  </div>
				</div>
				<div class="form-group py-2">
				  <label class="control-label col-sm-2" for="pmobile">Passenger Mobile:</label>
				  <div class="col-sm-10">
					<input type="TEXT" class="form-control" id="pmobile" placeholder="Enter PASSENGER MOBILE" name="pmobile">
				  </div>
				</div>
				<div class="form-group py-2"> 
				  <label class="control-label col-sm-2" for="paddr">Passenger Addr:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="paddr" placeholder="Enter PASSENGER ADDRESS" name="paddr">
				  </div>
				</div>
				<div class="form-group py-2"> 
				  <label class="control-label col-sm-2" for="busno">Bus Number:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="busno" placeholder="Enter BUS NUMBER" name="busno">
				  </div>
				</div>
				<div class="form-group py-2">
				  <label class="control-label col-sm-2" for="amount">Passenger booking Amt:</label>
				  <div class="col-sm-10">
					<input type="TEXT" class="form-control" id="amount" placeholder="Enter PASSENGER AMOUNT" name="amount">
				  </div>
                 </div>
				 <div class="form-group py-2">
				  <label class="control-label col-sm-2" for="routename">Passenger Route:</label>
				  <div class="col-sm-10">
					<input type="TEXT" class="form-control" id="routename" placeholder="Enter PASSENGER ROUTE" name="routename">
				  </div>
                 </div>
				 <div class="form-group py-2">
				  <label class="control-label col-sm-2" for="ptime">Passenger Time:</label>
				  <div class="col-sm-10">
					<input type="time" class="form-control" id="ptime" placeholder="Enter PASSENGER TIME" name="ptime">
				  </div>
                 </div>
				<input type="submit" name="Submit" class="button" value="Submit">
			</div>
		</div>
	</div>

<?php

if($_GET['Submit'])
{
	$pn  = $_GET['pnum'];
	$pna = $_GET['pname'];
	$pmb = $_GET['pmobile'];
    $pad = $_GET['paddr'];
    $bno = $_GET['busno'];
    $prc = $_GET['amount'];
	$rt  = $_GET['routename'];
	$pt  = $_GET['ptime'];
	
    


	if($pn != "" && $pna != "" && $pmb != "" && $pad != "" && $bno != ""&& $prc !="" && $rt !=""&& $pt !="")
	{
		$query = "INSERT INTO PASSENGER VALUES ('$pn','$pna','$pmb','$pad','$bno','$prc','$rt','$pt')";
		$data = mysqli_query($conn2,$query);
		if($data)
		{
			echo "THANK YOU FOR INSERTING PASSENGER <br> DETAILS";
		}
		else
		{
			error_get_last();
		}

	}
	else
	{
		echo "All Fields Are Required";
	}
}
?>
</center>
</body>
</html>