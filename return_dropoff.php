<?php
$dropoff_time = $_POST["dropoff_time"];
$phone_number = $_POST["phone_number"];
$email = $_POST["email"];

// Database connection details
$servername = "localhost"; // Replace with your MySQL server name
$username = "mpro_unidb"; // Replace with your MySQL username
$password = "4358"; // Replace with your MySQL password
$dbname = "returndb"; // Replace with your MySQL database name

// Create new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute SQL statement
$sql = "INSERT INTO dropoff (dropoff_time, phone_number, email) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $dropoff_time, $phone_number, $email);

if($stmt->execute()){
    echo "New record created successfully";
    echo "<br>";
    // Redirect to Return.php on success
    echo "<a href='Return.php' class='w3-button w3-black'>Bakc to Return Page</a>";
}
else{
    echo "Error " . $sql . "<br>" . $conn->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();

?>