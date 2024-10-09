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
    $sql = "SELECT * FROM pickup_history WHERE item_number LIKE '%$return_search%'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<li><b>Item Number:</b>  </li>" . [""]
            echo "<li><b>Return Type:</b>  </li>" . $row[""]
            echo "<li><b>Return Status:</b>  </li>";
            echo "<li><b>Description:</b>  </li>";
        }
    } else {
        echo "No results found";
    }
    $conn->close();
}
?>
