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
            <a class = "active">ABOUT</a>
        </div>
        <div class="w3-col s2">
            <a href = "Return.php">MAKE A RETURN</a>
        </div>
        <div class="w3-col s2">
            <a href = "History.php">HISTORY</a>
        </div>
        <div class="w3-col s2">
            <a href = "active">TRACK ORDERS</a>
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
<!-- About Container -->
<div class="w3-container menu" id="about" style="display:block">
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
<!-- End page content -->
</div>
<!-- Footer. This section contains an ad for W3Schools Spaces. You can leave it to support us. -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p>joke</p>
  <a class="w3-button w3-round-xxlarge w3-dark-grey w3-margin-bottom" href="https://www.w3schools.com/spaces" target="_blank">Start now</a>
 <!-- Footer end. -->
 </footer>
</body>
</html>