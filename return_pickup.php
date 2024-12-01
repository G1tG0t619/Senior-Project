<?php

// Get the form data
$customer_address = $_POST['customer_address'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];

// Database connection
$servername = "localhost";
$username = "mpro_unidb";
$password = "4358";
$dbname = "returndb";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL statement
$sql = "INSERT INTO pickup (customer_address, phone_number, email) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $customer_address, $phone_number, $email); 

if ($stmt->execute()) {
    echo "New record created successfully";
    echo "<br>";
    // Redirect to Return.php on success
    echo "<a href='Return.php' class='w3-button w3-black'>Back to Return Page</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();

?>
