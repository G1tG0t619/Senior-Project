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

if(isset($_POST['pickup_history'])){
    $search_album = $_POST['search_album'];
    $sql = "SELECT * FROM pickup_history WHERE item_number LIKE '%$pickup_history%'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "return_type: " . $row["return_type"]. "<br>item_number: " . $row["item_number"]. "<br>store_name: " . $row["store_name"]. 
            "<br>Lead Single: " . $row["Lead_Single"]. "<br>First Week Sales: " . $row["First_week_sales"]. "<br>Genre: " . $row["Genre"]. "<br><hr>";
        }
    } else {
        echo "No results found";
    }
    $conn->close();
}
?>
