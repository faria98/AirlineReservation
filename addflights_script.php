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
		$id = $_POST['id'];
		$airline_name = $_POST['airline_name'];
		$from_location = $_POST['from_location'];
		$to_location = $_POST['to_location'];
		$departure_time = $_POST['departure_time'];
		$arrival_time = $_POST['arrival_time'];
		$duration = $_POST['duration'];
		
$sql = "INSERT INTO flight
VALUES ('$id','$airline_name', '$from_location', '$to_location', '$departure_time',  '$arrival_time',  '$duration')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>