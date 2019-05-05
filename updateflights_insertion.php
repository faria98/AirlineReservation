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
		$f_id = $_POST['f_id'];
		$seats = $_POST['seats'];
		
$sql = "INSERT INTO update_flight(f_id,seats)
VALUES ('$f_id', '$seats')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
