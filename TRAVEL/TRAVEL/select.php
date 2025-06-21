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
<title>SELRN</title>
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
<body background="b1.jpg">
	<center>
<div class="text-center py-2">
<a href="index.html"><h4>Go Back To Home Page</h4></a>
</div>
	<h1>
		SELECT ROUTENAME AND CHECK TRAVELLERS
	</h1>
  <div class="col-md-9">
		<form action="" method="GET">
<div class="col-sm-10">          
					<input type="text" class="form-control" id="routename" placeholder="Enter ROUTE NAME" name="routename">
</div>
<input type="submit" name="submit" class="button" value="submit">
			</div>
</form>
<?php
// Assuming $conn2 is your connection variable and 'passenger' is your table name
// Replace 'your_database_name' with the actual name of your database
if(isset($_GET['submit']))
{
  include("connection2.php");
// Check if the 'routename' parameter is set
    if(isset($_GET['routename'])) {
        $routeName = $_GET['routename'];
    
        // Prepare the SQL statement to prevent SQL injection
        $stmt = $conn2->prepare("SELECT * FROM passenger WHERE ROUTENAME = ?");
        $stmt->bind_param("s", $routeName);
    
        // Execute the query
        $stmt->execute();
    
        // Store the result
        $result = $stmt->get_result();
    
        // Check if we have passengers
        if($result->num_rows > 0) {
          // Display the number of passengers
          echo "<p>Number of passengers traveling on route " . htmlspecialchars($routeName) . ": " . $result->num_rows . "</p>";
  
          // Start the HTML table
          echo "<table border='1'>";
          echo "<tr><th>PNO</th><th>PNAME</th><th>MOBILENO</th><th>ADDRESS</th><th>BUSENO</th><th>AMOUNT</th><th>ROUTENAME</th><th>PTIME</th></tr>";
  
          // Fetch all the passenger details
          while($passenger = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $passenger['PNO'] . "</td>";
              echo "<td>" . $passenger['PNAME'] . "</td>";
              echo "<td>" . $passenger['MOBILENO'] . "</td>";
              echo "<td>" . $passenger['ADDRESS'] . "</td>";
              echo "<td>" . $passenger['BUSNO'] . "</td>";
              echo "<td>" . $passenger['AMOUNT'] . "</td>";
              echo "<td>" . $passenger['ROUTENAME'] . "</td>";
              echo "<td>" . $passenger['PTIME'] . "</td>";
              echo "</tr>";
          }
  
          // End the HTML table
          echo "</table>";
      } else {
          echo "<p>No passengers found for route " . htmlspecialchars($routeName) . ".</p>";
      }
        // Close the statement
        $stmt->close();
  
    } 
    else 
    {
        echo "Route name not provided.";
    }
    // Close the connection
    $conn2->close();
     }
  ?>
</table>
    </center>
</body>
</html