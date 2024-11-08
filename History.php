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
            <a class = "active">HISTORY</a>
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
<!-- History Container -->
<div class="w3-container menu" id="return-history">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">RETURN HISTORY</span></h5>
    <form action="Return_History.php" method="post">
        <div class="search-container">
            <h1><center>Search by Item #: </center></h1>
            <input type="text" class="search-box" name="return_search" placeholder="Search by item number...">
            <button class="search-button" type="submit">Search</button>
        </div>
    </form>
</div>
<!-- Track Order Container -->
<div class="w3-container menu" id="track-order">
    <div class="w3-content" style="max-width:700px">
        <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">TRACK ORDER</span></h5>
        <form class="w3-container w3-card w3-padding" onsubmit="return trackOrder()">
            <p><b>Order Number</b></p>
            <p><input id="orderNumber" class="w3-input w3-padding-12 w3-border" type="text" placeholder="Enter your order number" required></p>
            <p><button class="w3-button w3-black" type="submit">Track</button></p>
        </form>
        <div id="orderStatus" class="w3-container w3-padding-48 w3-card" style="display: none;">
            <h5 class="w3-center"><span class="w3-tag w3-wide">Order Status</span></h5>
            <p id="orderStatusText"></p>
        </div>
    </div>
</div>
<!-- End page content -->
</div>
<script src = "tracking.js"></script>
<!-- Footer. This section contains an ad for W3Schools Spaces. You can leave it to support us. -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p>joke</p>
  <a class="w3-button w3-round-xxlarge w3-dark-grey w3-margin-bottom" href="https://www.w3schools.com/spaces" target="_blank">Start now</a>
 <!-- Footer end. -->
 </footer>
</body>
</html>