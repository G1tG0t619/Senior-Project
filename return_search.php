<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Validate input
$servername = "localhost"; // Replace with your MySQL server name
$username = "mpro_unidb"; // Replace with your MySQL username
$password = "4358"; // Replace with your MySQL password
$dbname = "returndb"; // Replace with your MySQL database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($POST['return_search'])){
    $return_search = $_POST['return_search'];

    // Escape the search term to prevent SQl injection
    $return_search = mysqli_real_escape_string($conn, $return_search);

    // Query pickup_history and dropoff_history tables
    $sql = "SELECT item_number, store_name, store_address, date_time, 
    return_status, description, return_type 
    FROM pickup_history 
    WHERE item_number LIKE '%$return_search%' 
    UNION ALL 
    SELECT item_number, store_name, store_address, date_time, 
    return_status, description, return_type 
    FROM dropoff_history 
    WHERE item_number LIKE '%$return_search%'";
    echo $sql;

    $result = $conn->query($sql);

    if($result){
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='w3-container menu' id='track-order'>";
                echo "Item Number: " . $row["item_number"];
                echo "Store Name: " . $row["store_name"];
                echo "Store Address: " . $row["store_address"];
                echo "Date and Time: " . $row["date_time"];
                echo "Return Status: " . $row["return_status"];
                echo "Description: " . $row["description"];
                echo "Return Type: " . $row["return_type"];
                echo "<hr>";
                echo "</div>";
            }
        } 
        else {
            echo "No results found for item number: " . $return_search;
        }
    }
    else{
        echo "Error executing query: " . $conn->error;
    }

    $conn->close();
}
?>