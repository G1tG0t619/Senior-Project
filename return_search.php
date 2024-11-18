<?php
$servername = "localhost"; // Replace with your MySQL server name
$username = "mpro_unidb"; // Replace with your MySQL username
$password = "4358"; // Replace with your MySQL password
$dbname = "returndb"; // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['return_search'])){
    $return_search = $_POST['return_search'];
    $sql = "SELECT * FROM pickup_history, dropoff_history WHERE item_number LIKE '%$return_search%'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Item Number: " . $item_number["item_number"].
            echo "Store Name: " . $store_name["store_name"].
            echo "Store Address: " . $store_address["store_address"].
            echo "Date and Time: " . $date_time["date_time"].
            echo "Return Status: " . $return_status["store_name"].
            echo "Description: " . $description["description"].
            echo "Return Type: " . $return_type["return_type"].
        }
    } else {
        echo "No results found";
    }
    $conn->close();
}
?>
