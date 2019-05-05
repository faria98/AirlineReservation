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
		$p_id = $_POST['p_id'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$tel_no = $_POST['tel_no'];
		$email = $_POST['email'];
		
$sql = "INSERT INTO passenger_profile
VALUES ('$p_id','$name', '$address', '$tel_no', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
