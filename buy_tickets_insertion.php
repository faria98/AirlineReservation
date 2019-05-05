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
		$u_id = $_POST['u_id'];
		$f_id = $_POST['f_id'];
		$seats = $_POST['seats'];
		
$sql = "INSERT INTO buy_history (user_id,f_id,seats)
VALUES ('$u_id','$f_id', '$seats')";


if ($conn->query($sql) === TRUE) {

    echo "New record created successfully<br>";

    $sql = "UPDATE update_flight SET seats = (seats-$seats) WHERE f_id = '$f_id'";

    if ($conn->query($sql) === TRUE) 
    {
    	
    echo "New record created successfully & Stocked";
}

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
