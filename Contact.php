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
            <a href = "Return.php">MAKE A RETURN</a>
        </div>
        <div class="w3-col s2">
            <a href = "History.php">HISTORY</a>
        </div>
        <div class="w3-col s2">
            <a class = "active">CONTACT US</a>
        </div>
    </div>
</div>
<hr>
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
        <form action="/action_page.php" target="POST">
            <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="First Name" required name="first_name"></p>
            <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Last Name" required name="last_name"></p>
            <p><input class="w3-input w3-padding-16 w3-border" type="email" placeholder="Email" required name="email"></p>
            <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="Phone Number" required name="phone_number"></p>
            <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Address" required name="user_address"></p>
            <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Question/Comment/Concern" required name="user_message"></p>
            <p><button class="w3-button w3-black" type="submit">ENTER</button></p>
        </form>
    </div>

    <div class = "contact_input">
        <?php
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $user_address = $_POST['address'];
            $user_message = $_POST['message'];


            if (!empty($first_name) || !empty($last_name) || !empty($email) || !empty($phone_number) || !empty($user_address) || !empty($user_message)) {
                $servername = "localhost"; // Replace with your MySQL server name
                $username = "mpro_unidb"; // Replace with your MySQL username
                $password = "4358"; // Replace with your MySQL password
                $dbname = "returndb"; // Replace with your MySQL database name

                $conn = new msqli($servername, $username, $password, $dbname);

                if (mysqili_connect_error()){
                    die('Connect error('. mysqli_connect_errno().')' . mysqli_connect_error());
                }
                else{
                    $SELECT = "SELECT email From contact Where email = ? Limit 1";
                    $INSERT = "INSERT Into contact (first_name, last_name, email, phone_number, user_address, user_message) values (?, ?, ?, ?, ?, ?)";

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
                        $stmt->bind_param("sssiss", $first_name, $last_name, $email, $phone_number, $user_address, $user_message);
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

</body>
</html>