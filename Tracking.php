<!DOCTYPE html>
<html>
<head>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <style>
        body, html {
            height: 100%;
            font-family: "Inconsolata", sans-serif;
        }
        .bgimg {
            background-position: center;
            background-size: cover;
            background-image: url("https://www.w3schools.com/w3images/coffeehouse.jpg");
            min-height: 75%;
        }
        .menu {
            display: block;
        }
        .tablink {
            cursor: pointer;
        }
        .w3-black-active {
            background-color: #000 !important;
        }
    </style>
</head>
<body>
<!-- Links (sit on top) -->
<div class="w3-top">
    <div class="w3-row w3-padding w3-black">
        <div class="w3-col s2">
            <a href = "Home.php">HOME</a>
        </div>
        <div class="w3-col s2">
            <a href = "Login_Page.php">LOGIN</a>
        </div>
        <div class="w3-col s2">
            <a href = "About.php">ABOUT</a>
        </div>
        <div class="w3-col s2">
            <a href = "Return.php">MAKE A RETURN</a>
        </div>
        <div class="w3-col s2">
            <a href = "History.php">HISTORY</a>
        </div>
        <div class="w3-col s2">
            <a class = "active">TRACK ORDERS</a>
        </div>
        <div class="w3-col s2">
            <a href = "Contact.php">CONTACT US</a>
        </div>
    </div>
</div>
<hr>
<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">24/7 Return Service!</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:90px">ReturnIt</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">West Broad Street,Richmond VA, 23235</span>
  </div>
</header>
<!-- Track Order Container -->
<div class="w3-container menu" id="track-order">
    <div class="w3-content" style="max-width:700px">
        <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">TRACK ORDER</span></h5>
        <form class="w3-container w3-card w3-padding" action = "Tracking.php" method = "_POST">
            <p><input id="return_search" class="w3-input w3-padding-12 w3-border" type="number" placeholder="Enter your order number..." required></p>
            <p><button class="w3-button w3-black" type="submit">Track</button></p>
        </form>
    </div>
</div>
<hr>
<hr>
<div class  = "search-results">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['return_search'])) {
        // Perform the history search
        $servername = "localhost"; // Replace with your MySQL server name
        $username = "mpro_unidb"; // Replace with your MySQL username
        $password = "4358"; // Replace with your MySQL password
        $dbname = "returndb"; // Replace with your MySQL database name

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $return_search = $_POST['return_search'];
        $sql = "SELECT * FROM pickup_history UNION ALL SELECT * FROM dropoff_history WHERE item_number LIKE '%$return_search%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='w3-container menu' id='track-order'>";
                echo "Item Number: " . $item_number["item_number"];
                echo "Store Name: " . $store_name["store_name"];
                echo "Store Address: " . $store_address["store_address"];
                echo "Date and Time: " . $date_time["date_time"];
                echo "Return Status: " . $return_status["store_name"];
                echo "Description: " . $description["description"];
                echo "Return Type: " . $return_type["return_type"];
                echo "<hr>";
                echo "</div>";
            }
        } else {
            echo "No results found!";
        }
        $conn->close();
    }
    ?>
</div>
</body>
</html>