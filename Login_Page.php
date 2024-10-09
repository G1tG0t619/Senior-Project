<!DOCTYPE html>  
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
<body>  
    <div class = "w3-container menu" id = "login">  
        <div class="w3-content" style="max-width:700px">
        <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">Login</span></h5>
        <div id="store-Info" class="w3-container menu w3-padding-48 w3-card">
            <h5 class="w3-center"><span class="w3-tag w3-wide">Store Info</span></h5>
            <form action="Login_Page.php" onsubmit = "return validation()" method = "post">
                <p><b>Username</b></p>
                <p><input class="w3-input w3-padding-12 w3-border" type="text" placeholder="Username" required name="username"></p>
                <p><b>Password</b></p>
                <p><input class="w3-input w3-padding-12 w3-border" type="text" placeholder="User Password" required name="user_password"></p>
                <p><button class="w3-button w3-black" type="submit">ENTER</button></p>
            </form>
        </div>
         <!-- Validation for Empty Field --> 
        <script>  
                function validation()  
                {  
                    var id=document.f1.user.value;  
                    var ps=document.f1.pass.value;  
                    if(id.length=="" && ps.length=="") {  
                        alert("User Name and Password fields are empty");  
                        return false;  
                    }  
                    else  
                    {  
                        if(id.length=="") {  
                            alert("User Name is empty");  
                            return false;  
                        }   
                        if (ps.length=="") {  
                        alert("Password field is empty");  
                        return false;  
                        }  
                    }                             
                }  
        </script>  
    </div>  
    
    <!-- Add this div for login input-->
    <div class = "login_input">
        <?php
        $username = $POST['username'];
        $user_password = $POST['user_password'];

        if (!empty($store_name) || !empty($username) || !empty($user_password)) {
            $servername = "localhost"; // Replace with your MySQL server name
            $username = "mpro_unidb"; // Replace with your MySQL username
            $password = "4358"; // Replace with your MySQL password
            $dbname = "returndb"; // Replace with your MySQL database name

            $conn = new msqli($servername, $username, $password, $dbname);

            if (mysqili_connect_error()){
                die('Connect error('. mysqli_connect_errno().')' . mysqli_connect_error());
            }
            else{
                $SELECT = "SELECT user_password From login_page Where user_password = ? Limit 1";
                $INSERT = "INSERT Into login_page (username, user_password) values (?, ?)";

                //Prepare select statement
                $stmt = $conn->prepare($SELECT);
                $stmt->bind_param("s", $user_password);
                $stmt->execute();
                $stmt ->bind_result($user_password);
                $stmt->store_result();
                $rnum = $stmt->num_rows;

                if ($rnum==0){
                    $stmt->close();

                    $stmt = $conn_>prepare($INSERT);
                    $stmt->bind_param("ss", $username, $user_password);
                    $stmt->execute();
                    echo "Welcome to ReturnIt!";
                }
                else{
                    echo "Login failed? Check username or password and try again.";
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
    
</body>     
</html>