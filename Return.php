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
            <a href = "Contact.php">CONTACT US</a>
        </div>
    </div>
</div>
<hr>
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
            <form action="Store_Info.php" method = "_POST">
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
            <form action="Return_Dropoff.php" method = "_POST">
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
            <form action="Return_Pickup.php" method = "_POST">
                <p><b>Customer Address</b></p>
                <p><input class="w3-input w3-padding-12 w3-border" type="text" placeholder="Customer Address" required name="customer_address"></p>
                <p><b>Phone Number</b></p>
                <p><input class="w3-input w3-padding-12 w3-border" type="number" placeholder="Phone Number" required name="phone_number"></p>
                <p><b>Email</b></p>
                <p><input class="w3-input w3-padding-12 w3-border" type="email" placeholder="Email" required name="email"></p>
                <p><button class="w3-button w3-black" type="submit">ENTER</button></p>
            </form>
        </div>

        <div class = "store_info">
            <?php
                $store_name = $_POST['store_name'];
                $store_address = $_POST['store_address'];
                $phone_number = $_POST['phone_number'];
                $email = $_POST['email'];
                
                if (!empty($store_name) || !empty($store_address) || !empty($phone_number) || !empty($email)) {
                    $servername = "localhost"; // Replace with your MySQL server name
                    $username = "mpro_unidb"; // Replace with your MySQL username
                    $password = "4358"; // Replace with your MySQL password
                    $dbname = "returndb"; // Replace with your MySQL database name
                
                    $conn = new msqli($servername, $username, $password, $dbname);
                
                    if (mysqili_connect_error()){
                        die('Connect error('. mysqli_connect_errno().')' . mysqli_connect_error());
                    }
                    else{
                        $SELECT = "SELECT email From store_info Where email = ? Limit 1";
                        $INSERT = "INSERT Into store_info (store_name, store_address, phone_number, email) values (?, ?, ?, ?)";
                
                        //Prepare select statement
                        $stmt = $conn->prepare($SELECT);
                        $stmt->bind_param("s", $email);
                        $stmt->execute();
                        $stmt ->bind_result($email);
                        $stmt->store_result();
                        $rnum = $stmt->num_rows;
                
                        if ($rnum==0){
                            $stmt->close();
                
                            $stmt = $conn_>prepare($INSERT);
                            $stmt->bind_param("ssis", $store_name, $store_address, $phone_number, $email);
                            $stmt->execute();
                            echo "New record inserted successfully";
                        }
                        else{
                            echo "";
                        }
                        $stmt->close();
                        $conn->close();
                    }
                }
                else{
                    echo "All fields are required";
                    die();
                }
            ?>
        </div>
        <div class = "return_pickup">
            <?php
                $customer_address = $_POST['customer_address'];
                $phone_number = $_POST['phone_number'];
                $email = $_POST['email'];
                
                if (!empty($store_name) || !empty($customer_address) || !empty($phone_number) || !empty($email)) {
                    $servername = "localhost"; // Replace with your MySQL server name
                    $username = "mpro_unidb"; // Replace with your MySQL username
                    $password = "4358"; // Replace with your MySQL password
                    $dbname = "returndb"; // Replace with your MySQL database name
                
                    $conn = new msqli($servername, $username, $password, $dbname);
                
                    if (mysqili_connect_error()){
                        die('Connect error('. mysqli_connect_errno().')' . mysqli_connect_error());
                    }
                    else{
                        $SELECT = "SELECT email From pickup Where email = ? Limit 1";
                        $INSERT = "INSERT Into pickup (customer_address, phone_number, email) values (?, ?, ?)";
                
                        //Prepare select statement
                        $stmt = $conn->prepare($SELECT);
                        $stmt->bind_param("s", $email);
                        $stmt->execute();
                        $stmt ->bind_result($email);
                        $stmt->store_result();
                        $rnum = $stmt->num_rows;
                
                        if ($rnum==0){
                            $stmt->close();
                
                            $stmt = $conn_>prepare($INSERT);
                            $stmt->bind_param("sis", $customer_address, $phone_number, $email);
                            $stmt->execute();
                            echo "New record inserted successfully";
                        }
                        else{
                            echo "";
                        }
                        $stmt->close();
                        $conn->close();
                    }
                }
                else{
                    echo "All fields are required";
                    die();
                }
            ?>
        </div>
        <div class = "return-dropoff">
            <?php
                $dropoff_location = $_POST['dropoff_location'];
                $phone_number = $_POST['phone_number'];
                $email = $_POST['email'];
                
                if (!empty($store_name) || !empty($dropoff_location) || !empty($phone_number) || !empty($email)) {
                    $servername = "localhost"; // Replace with your MySQL server name
                    $username = "mpro_unidb"; // Replace with your MySQL username
                    $password = "4358"; // Replace with your MySQL password
                    $dbname = "returndb"; // Replace with your MySQL database name
                
                    $conn = new msqli($servername, $username, $password, $dbname);
                
                    if (mysqili_connect_error()){
                        die('Connect error('. mysqli_connect_errno().')' . mysqli_connect_error());
                    }
                    else{
                        $SELECT = "SELECT email From dropoff Where email = ? Limit 1";
                        $INSERT = "INSERT Into dropoff (dropoff_location, phone_number, email) values (?, ?, ?)";
                
                        //Prepare select statement
                        $stmt = $conn->prepare($SELECT);
                        $stmt->bind_param("s", $email);
                        $stmt->execute();
                        $stmt ->bind_result($email);
                        $stmt->store_result();
                        $rnum = $stmt->num_rows;
                
                        if ($rnum==0){
                            $stmt->close();
                
                            $stmt = $conn_>prepare($INSERT);
                            $stmt->bind_param("sis", $dropoff_location, $phone_number, $email);
                            $stmt->execute();
                            echo "New record inserted successfully";
                        }
                        else{
                            echo "";
                        }
                        $stmt->close();
                        $conn->close();
                    }
                }
                else{
                    echo "All fields are required";
                    die();
                }
            ?>
        </div>
    </div>
</div>
</body>
</html>