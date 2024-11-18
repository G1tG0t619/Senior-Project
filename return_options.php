<?php
// Connect to database
$con = new mysqli("localhost", "mpro_unidb", "4358", "returndb");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the store ID from from submission
$store_id = $_POSt['store_ID'];

//Close the database connection
mysqli_close($con);

// Redirect to a new page with the store ID as as a query parameter
header("Location: Return.php?store_id=$store_id");
?>