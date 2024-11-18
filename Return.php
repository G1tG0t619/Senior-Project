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
            <a href = "Login_Page.php">LOGIN</a>
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
                <form action="process_return.php" method="_POST">
                    <select id="return-type" name="return-type">
                        <option value="drop-off">Drop-Off</option>
                        <option value="pick-up">Pick-Up</option>
                    </select>
                    <button class="w3-button w3-black" type="sumbit">SUBMIT</button>
                </form>
                <br>
                <div id="drop-off" class="w3-container menu w3-padding-48 w3-card">
                    <h5 class="w3-center"><span class="w3-tag w3-wide">Drop-Off</span></h5>
                    <form action="return_dropoff.php" method="_POST">
                        <p><b>Store Name</b></p>
                        <p><b>Drop-Off Location</b></p>
                        <p><input class="w3-input w3-padding-12 w3-border" type="text" placeholder="Dropoff Location" required name="dropoff_location"></p>
                        <p><b>Phone Number</b></p>
                        <p><input class="w3-input w3-padding-12 w3-border" type="number" placeholder="Phone Number" required name="phone_number"></p>
                        <p><b>Email</b></p>
                        <p><input class="w3-input w3-padding-12 w3-border" type="email" placeholder="Email" required name="email"></p>
                        <p><button class="w3-button w3-black" type="submit">ENTER</button></p>
                    </form>
                </div>
                <div id="pick-up" class="w3-container menu w3-padding-48 w3-card">
                    <h5 class="w3-center"><span class="w3-tag w3-wide">Pick-Up</span></h5>
                    <form action="return_pickup.php" method="_POST">
                        <p><b>Customer Address</b></p>
                        <p><input class="w3-input w3-padding-12 w3-border" type="text" placeholder="Customer Address" required name="customer_address"></p>
                        <p><b>Phone Number</b></p>
                        <p><input class="w3-input w3-padding-12 w3-border" type="number" placeholder="Phone Number" required name="phone_number"></p>
                        <p><b>Email</b></p>
                        <p><input class="w3-input w3-padding-12 w3-border" type="email" placeholder="Email" required name="email"></p>
                        <p><button class="w3-button w3-black" type="submit">ENTER</button></p>
                    </form>
                </div>
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

    // Add an event listener to the dropdown
    returnTypeDropdown.addEventListener('change', function() {
        var selectedType = this.value;

        // Hide all subtabs
        var subtabs = document.querySelectorAll('.w3-container.menu.w3-padding-48.w3-card');
        subtabs.forEach(tab => {
            tab.style.display = 'none';
        });

        // Show the selected subtab
        document.getElementById(selectedType).style.display = 'block';
    });
</script>
</body>
</html>