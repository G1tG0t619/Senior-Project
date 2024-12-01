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
                <a href = "Return.php">GO BACK TO RETURNS</a>
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
    <div id="drop-off" class="w3-container menu w3-padding-48 w3-card">
        <h5 class="w3-center"><span class="w3-tag w3-wide">Drop-Off</span></h5>
        <form action="return_dropoff.php" method="POST">
            <p><b>Preferred Drop-Off Time</b></p>
            <p><input class="w3-input w3-padding-12 w3-border" type="datetime-local" placeholder="Preferred Drop-Off Time" required name="dropoff_time"></p>
            <p><b>Phone Number</b></p>
            <p><input class="w3-input w3-padding-12 w3-border" type="text" placeholder="Phone Number" required name="phone_number"></p>
            <p><b>Email</b></p>
            <p><input class="w3-input w3-padding-12 w3-border" type="text" placeholder="Email" required name="email"></p>
            <p><button class="w3-button w3-black" type="submit">ENTER</button></p>
        </form>
    </div>
</div>
</body>
</html>