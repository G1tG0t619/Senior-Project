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
            display: none;
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
            <a href="javascript:void(0)" onclick="openTab(event, 'welcome')" class="w3-button w3-block w3-black tablink">WELCOME</a>
        </div>
        <div class="w3-col s2">
            <a href="javascript:void(0)" onclick="openTab(event, 'home')" class="w3-button w3-block w3-black tablink">HOME</a>
        </div>
        <div class="w3-col s2">
            <a href="javascript:void(0)" onclick="openTab(event, 'about')" class="w3-button w3-block w3-black tablink">ABOUT</a>
        </div>
        <div class="w3-col s2">
            <a href="javascript:void(0)" onclick="openTab(event, 'return')" class="w3-button w3-block w3-black tablink">MAKE A RETURN</a>
        </div>
        <div class="w3-col s2">
            <a href="javascript:void(0)" onclick="openTab(event, 'return-history')" class="w3-button w3-block w3-black tablink">RETURN HISTORY</a>
        </div>
        <div class="w3-col s2">
            <a href="javascript:void(0)" onclick="openTab(event, 'contact')" class="w3-button w3-block w3-black tablink">CONTACT US</a>
        </div>
        <div class="w3-col s2">
            <a href="javascript:void(0)" onclick="openTab(event, 'track-order')" class="w3-button w3-block w3-black tablink">TRACK ORDER</a>
        </div>
    </div>
</div>

<!-- Welcome Page -->
<div class="w3-container menu" id="welcome" style="display:block">
    <div class="w3-content" style="max-width:700px">
        <h1 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">WELCOME TO RETURNIT</span></h1>
        <p class="w3-center">Your one-stop solution for all return services. Click on the tabs above to navigate through our website.</p>
        <p class="w3-center"><img src="https://relbox.com/wp-content/uploads/2016/03/bunch-of-boxes.png" style="width:100%;max-width:1000px;" class="w3-margin-top"></p>
    </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min menu" id="home">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
        <span class="w3-tag">24/7 Return Service!</span>
    </div>
    <div class="w3-display-middle w3-center">
        <span class="w3-text-white" style="font-size:90px">ReturnIt</span>
    </div>
    <div class="w3-display-bottomright w3-center w3-padding-large">
        <span class="w3-text-white">West Broad Street, Richmond VA, 23235</span>
    </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-white w3-grayscale w3-large">

    <!-- About Container -->
    <div class="w3-container menu" id="about">
        <div class="w3-content" style="max-width:700px">
            <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT US </span></h5>
            <p>Founded in January of 2024, ReturnIt is a company that specializes in providing fast and convenient return services.
                Whether you're a small business owner or a customer with a item that's proven too challenging to return, ReturnIt can give you the help you need!
                Customers will have the option to either drop-off their products at a designated ReturnIt store, or to register them for pickup. We will work with
                companies to ensure that all products are returned efficiently and with no hassle.
            </p>
            <br>
            <img src="image.jpg" style="width:100%;max-width:1000px;" class="w3-margin-top">
            <p><strong>Providing high quality service, 24/7!</strong></p>
            <p><strong>Key People</strong></p>
            <ul>
                <li><strong>Executive Chairman & CEO:</strong>Willie Williams</li>
                <li><strong>COO:</strong>Matthew Prosise</li>
            </ul>
        </div>
    </div>

    <!-- Return Container -->
    <div class="w3-container menu" id="return">
        <div class="w3-content" style="max-width:700px">
            <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">MAKE A RETURN</span></h5>
            <div class="w3-row w3-center w3-card w3-padding">
                <a href="javascript:void(0)" onclick="openSubTab(event, 'store-Info');" class="w3-col s4 tablink">Store Info</a>
                <a href="javascript:void(0)" onclick="openSubTab(event, 'drop-off');" class="w3-col s4 tablink">Drop-Off</a>
                <a href="javascript:void(0)" onclick="openSubTab(event, 'pick-up');" class="w3-col s4 tablink">Pick-Up</a>
            </div>
            <div id="store-Info" class="w3-container menu w3-padding-48 w3-card">
                <h5 class="w3-center"><span class="w3-tag w3-wide">Store Info</span></h5>
                <form action="Store_Info.php" method = "post">
                    <p><b>Store Name</b></p>
                    <p><input class="w3-input w3-padding-12 w3-border" type="text" placeholder="Store Name" required name="store_name"></p>
                    <p><b>Store Address</b></p>
                    <p><input class="w3-input w3-padding-12 w3-border" type="text" placeholder="Address" required name="store_address"></p>
                    <p><b>Phone Number</b></p>
                    <p><input class="w3-input w3-padding-12 w3-border" type="number" placeholder="Phone Number" required name="phone_number"></p>
                    <p><b>Email</b></p>
                    <p><input class="w3-input w3-padding-12 w3-border" type="email" placeholder="Email" required name="email"></p>
                    <p><button class="w3-button w3-black" type="submit">ENTER</button></p>
                </form>
            </div>
            <div id="drop-off" class="w3-container menu w3-padding-48 w3-card">
                <h5 class="w3-center"><span class="w3-tag w3-wide">Drop-Off</span></h5>
                <form action="Return_Dropoff.php" method = "post">
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
                <form action="Return_Pickup.php" method = "post">
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

    <!-- History Container -->
    <div class="w3-container menu" id="return-history">
        <div class="w3-content" style="max-width:700px">
            <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">RETURN HISTORY</span></h5>
            <div class="w3-row w3-center w3-card w3-padding">
                <a href="javascript:void(0)" onclick="openSubTab(event, 'history');" class="w3-col s6 tablink">Return History</a>
                <a href="javascript:void(0)" onclick="openSubTab(event, 'tracking');" class="w3-col s6 tablink">Track Returns</a>
            </div>
            <div id="history" class="w3-container menu w3-padding-48 w3-card">
                <h5 class="w3-center"><span class="w3-tag w3-wide">Return History</span></h5>
                <form action="Return_History.php" method="post">
                    <div class="search-container">
                        <h1><center>Search by Item #: </center></h1>
                        <input type="text" class="search-box" name="return_search" placeholder="Search by item number...">
                        <button class="search-button" type="submit">Search</button>
                    </div>
                </form>
            </div>
            <div id="tracking" class="w3-container menu w3-padding-48 w3-card">
                <h5 class="w3-center"><span class="w3-tag w3-wide">Track Returns</span></h5>
                <ul>
                    <li><strong>Item #1</strong></li>
                    <ul>
                        <li><b>Item #:</b> AH22190835</li>
                        <li><b>Return Type:</b> Pick-Up</li>
                        <li><b>Status:</b> In Progress</li>
                    </ul>
                    <li><strong>Item #2</strong></li>
                    <ul>
                        <li><b>Item #:</b> AH99340481</li>
                        <li><b>Return Type:</b> Drop-Off</li>
                        <li><b>Status:</b> Completed</li>
                    </ul>
                </ul>
            </div>
        </div>
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

    <!-- Contact/Area Container -->
    <div class="w3-container menu" id="contact">
        <div class="w3-content" style="max-width:700px">
            <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">CONTACT US</span></h5>
            <p>Willie Williams - williewilliams141@gmail.com</p>
            <p> Telephone - (804) 467-2882</p>
            <p>Matthew Prosise - mprosise998@gmail.com</p>
            <p> Telephone - (804) 586-6275</p>
            <img src="https://www.w3schools.com/w3images/map.jpg" class="w3-image" style="width:100%">
            <p><b>Questions? Comments? Concerns? Contact Us</b></p>
            <form action="/action_page.php" target="_blank">
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="First Name" required name="First Name"></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Last Name" required name="Last Name"></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="email" placeholder="Email" required name="People"></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="Phone Number" required name="Phone"></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Address" required name="address"></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Question/Comment/Concern" required name="Message"></p>
                <p><button class="w3-button w3-black" type="submit">ENTER</button></p>
            </form>
        </div>
    </div>

    <!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
    <p>joke</p>
    <a class="w3-button w3-round-xxlarge w3-dark-grey w3-margin-bottom" href="https://www.w3schools.com/spaces" target="_blank">Start now</a>
</footer>

<script>
    // Tabbed Menu
    function openTab(evt, tabName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("menu");
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

    // Sub-tabbed Menu
    function openSubTab(evt, tabName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("menu");
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

    // Initialize by opening the WELCOME tab
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelector(".tablink").click();
    });

    // Tracking Order System
    function trackOrder() {
        var orderNumber = document.getElementById("orderNumber").value;
        var orderStatus = document.getElementById("orderStatus");
        var orderStatusText = document.getElementById("orderStatusText");

        var orders = {
            "12345": "Your order is being processed.",
            "67890": "Your order has been shipped.",
            "11223": "Your order has been delivered.",
        };

        if (orders[orderNumber]) {
            orderStatusText.innerHTML = orders[orderNumber];
        } else {
            orderStatusText.innerHTML = "Order not found. Please check the order number and try again.";
        }

        orderStatus.style.display = "block";
        return false;
    }
</script>

</body>
</html>