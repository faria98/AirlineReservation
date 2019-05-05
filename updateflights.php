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

$sql = "SELECT id,airline_name FROM flight";
$result = $conn->query($sql);

$conn->close();
?>

<html>
<head>
	<title>Update Flights</title>
	<style >
	.bg-img {
  /* The image used */
  background-image: url("air1.jpg");

  min-height: 500px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
	.container{
  position: relative;
  left: 0;
  margin: 20px;
  max-width:300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
input[type=submit] , input[type=text]{
  width: 10%;
  padding: 5px;
  margin: 5px 0 10px 0;
  border: none;
  background: #f1f1f1;
}

.label {
  color: white;
}

/* Set a style for the submit button */
.btn {
  background-color: green;
  color: green;
  padding: 16px 20px;
  border: 1;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<h1>Update Flights</h1>
<div class="bg-img">
<form action="updateflights_insertion.php" method="POST">
	
		<label class="label">Select Flight id</label><br>
		<select name="f_id" class="container">
			<?php
					if ($result->num_rows > 0) {
				    
				    while($row = $result->fetch_assoc()) {
				    echo '<option value="'.$row['id'].'">'.$row['airline_name'].'</option>';
				}
			}
				else {
				echo "No entry found";
			}
		?>
  </select><br>
 <label class="label">Seats</label><br>
  <input type="text" name="seats" value=""><br>

  <input type="submit" value="Submit" class="btn">
	</form>
	<br>
	<br>
	<a href="index.html">Home</a></li>
</div>
</body>
</html>