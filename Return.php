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
            background-image: url(https://relbox.com/wp-content/uploads/2016/03/bunch-of-boxes.png);
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
        /* Dropdown Button */
        .dropbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
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
            <a href = "About.php">ABOUT</a>
        </div>
        <div class="w3-col s2">
            <a class = "active">MAKE A RETURN</a>
        </div>
        <div class="w3-col s2">
            <a href = "History.php">HISTORY</a>
        </div>
        <div class="w3-col s2">
            <a href = "Tracking.php">TRACK ORDERS</a>
        </div>
        <div class="w3-col s2">
            <a href = "Contact.php">CONTACT US</a>
        </div>
        <div class="w3-col s2">
            <a href = "Logout.php">LOGOUT</a>
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
<!-- Add a background color and large text to the whole page -->
<div class="w3-white w3-grayscale w3-large">
    <!-- Return Container -->
    <div class="w3-container menu" id="return">
        <div class="w3-content" style="max-width:700px">
            <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">MAKE A RETURN</span></h5>
            <div id="store-select" class="w3-container menu w3-padding-48 w3-card">
                <h5 class="w3-center"><span class="w3-tag w3-wide">Store Selection</span></h5>
                <br>
                <?php
                    // Connect to database 
                    $con = new mysqli("localhost", "mpro_unidb", "4358", "returndb");
                    if (!$con) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    // Fetch store data from database
                    $sql = "SELECT * FROM `store_select`";
                    $result = mysqli_query($con, $sql);

                    if (mysqli_num_rows($result) > 0){
                        echo '<form action="return_options.php" method = "_POST">';
                        echo '<label for="dropdown">Select a Store</label>';
                        echo '<br>';
                        echo '<select id="dropdown" name="store_ID">';
                        // Output data of each row
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<option value="' . $row["store_ID"] . '">' . $row["store_name"] . '</option>';
                        }
                        echo '</select>';
                        echo '<p><button class="w3-button w3-black" type="submit">ENTER</button></p>';
                        echo '</form>';
                    }
                    else{
                        echo "0 results";
                    }
                    // Close the database connection
                    mysqli_close($con);
                ?>
            </div>
            <div id="return-options" class="w3-container menu w3-padding-48 w3-card" style="display: none;">
                <h5 class="w3-center"><span class="w3-tag w3-wide">Return Options</span></h5>
                <br>
                <a href="dropoff.php" class="w3-button w3-black">Drop-Off</a>
                <a href="pickup.php" class="w3-button w3-black">Pick-Up</a>
            </div>
        </div>
    </div>
<!-- End page content -->
</div>
<script>
    // Get the store selection menu
    var storeSelectMenu = document.getElementById('store-select');
    // Get the return options menu
    var returnOptionsMenu = document.getElementById('return-options');

    // Add an event listener to the form to hide the store selection menu and show the return options menu
    storeSelectMenu.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission
        storeSelectMenu.style.display = 'none'; // Hide the store selection menu
        returnOptionsMenu.style.display = 'block'; // Show the return options menu
    });

    // Function to open a subtab
    function openSubTab(evt, tabName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("w3-container menu w3-padding-48 w3-card");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-black-active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " w3-black-active";
    }

    // Get the return-type dropdown element
    var returnTypeDropdown = document.getElementById('return-type');
</script>
</body>
</html>