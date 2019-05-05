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


// php code to search data in mysql database and set it in input text

if(isset($_POST['search']))
{
    // id to search
    $p_id = $_POST['p_id'];
    
    // connect to mysql
    $sql = "SELECT name,address,tel_no,email FROM passenger_profile WHERE 'p_id' = $p_id ";
    $result = $conn->query($sql);

    mysqli_free_result($result);
    mysqli_close($connect);
    
}

// in the first time inputs are empty
else{
    $p_id = "";
    
}


?>

<!DOCTYPE html>

<html>
    <head>
        <title> Sea</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <table border="1">
            <thead>
                <th>Name</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Email</th>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                    
                    while($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo'<td>'.$row['name'].'</td>';
                    echo'<td>'.$row['address'].'</td>';
                    echo'<td>'.$row['tel_no'].'</td>';
                    echo'<td>'.$row['email'].'</td>';
                
                    echo'</tr>'; 
                     }  
                } else {
                    echo "No flights found ";
                }
                ?>

            </tbody>
        </table>

</html>
