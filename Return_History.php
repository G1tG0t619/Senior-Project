<!DOCTYPE html>
<html>
    <body>
        <!-- Add this div to display pickup history -->
        <div class="pickup-history">
            <?php
            // Include database connection code here

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['return_search'])) {
                // Perform pickup search
                $servername = "localhost"; // Replace with your MySQL server name
                $username = "mpro_unidb"; // Replace with your MySQL username
                $password = "4358"; // Replace with your MySQL password
                $dbname = "returndb"; // Replace with your MySQL database name

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $pickup_history = $_POST['return_search'];
                $sql = "SELECT * FROM pickup_history WHERE item_number LIKE '%$return_search%'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='w3-container menu' id='return-history'>";
                        echo "<li><b>Return Type:</b>  </li>";
                        echo "<li><b>Item Number:</b>  </li>";
                        echo "<li><b>Store Name:</b>  </li>";
                        echo "<li><b>Address:</b>  </li>";
                        echo "<li><b>Date/Time of Pickup:</b>  </li>";
                        echo "<li><b>Return Status:</b>  </li>";
                        echo "<li><b>Description:</b>  </li>";
                        echo "</div>";
                    }
                } else {
                    echo "No results found! Please consult your return history.";
                }
                $conn->close();
            }
            ?>
        </div>

        <!-- Add this div to display dropoff history -->
        <div class="dropoff-history">
            <?php
            // Include database connection code here

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['return_search'])) {
                // Perform pickup search
                $servername = "localhost"; // Replace with your MySQL server name
                $username = "mpro_unidb"; // Replace with your MySQL username
                $password = "4358"; // Replace with your MySQL password
                $dbname = "returndb"; // Replace with your MySQL database name

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $pickup_history = $_POST['return_search'];
                $sql = "SELECT * FROM dropoff_history WHERE item_number LIKE '%$return_search%'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='w3-container menu' id='return-history'>";
                        echo "<li><b>Return Type:</b>  </li>";
                        echo "<li><b>Item Number:</b>  </li>";
                        echo "<li><b>Store Name:</b>  </li>";
                        echo "<li><b>Address:</b>  </li>";
                        echo "<li><b>Drop-Off Location:</b> </li>";
                        echo "<li><b>Date/Time of Dropoff:</b>  </li>";
                        echo "<li><b>Return Status:</b>  </li>";
                        echo "<li><b>Description:</b>  </li>";
                        echo "</div>";
                    }
                } else {
                    echo "No results found! Please consult your return history.";
                }
                $conn->close();
            }
            ?>
        </div>
    </body>
</html>