<!DOCTYPE html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM flight";
$result = $conn->query($sql);

$conn->close();
?>


<html>
<head>
	<title>Flights details</title>
	<style >
	table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;

</style>
</head>
<body>
	<div>
		
		<center><h1><b><font color = "red">Airline Resevation System</font></b></h1></center>
	</div>
	<div>
		<h2><center><font color="blue">Flight Details</font></center> </h2>
	</div>

	<fieldset>
		<legend><center><b>Flights Schedule</b></center></legend><br>
		<table border="1">
			<thead>
				<th>Flight ID</th>
				<th>Airline Name</th>
				<th>From</th>
				<th>To</th>
				<th>Departure Time</th>
				<th>Arrival Time</th>
				<th>Duration</th>
			</thead>
			<tbody>
				<?php
					if ($result->num_rows > 0) {
				    
				    while($row = $result->fetch_assoc()) {
				    echo '<tr>';
				    echo'<td>'.$row['id'].'</td>';
				    echo'<td>'.$row['airline_name'].'</td>';
				    echo'<td>'.$row['from_location'].'</td>';
				    echo'<td>'.$row['to_location'].'</td>';
				    echo'<td>'.$row['departure_time'].'</td>';
				    echo'<td>'.$row['arrival_time'].'</td>';
				    echo'<td>'.$row['duration'].'</td>';
					 echo'</tr>'; 
				     }  
				} else {
				    echo "No flights found ";
				}
				?>

			</tbody>
		</table>
	
	</fieldset>

	<br>
	<br>
	<a href="index.html">Home</a></li>

	  
</body>
</html>