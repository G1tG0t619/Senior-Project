<!DOCTYPE html>
<html>
<head>
    <<title>W3.CSS Template</title>
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
        .profile-picture{

        }

        .profile-picture img{

        }

        .user-info{
            
        }
    </style>
</head>
<body>
    <?php
        session_start();

        if(!isset($_SESSION['username'])){
            header("Location: Login_Page.php");
            exit;
        }

        $username = $_SESSION['username'];

        // Database connection
        $conn = new mysqli("localhost", "mpro_unidb", "4358", "returndb");
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch user data from database
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $profilePicture = $row['profile_picture'];
        }
        else{
            echo "User not found.";
        }
    ?>

    <h1>Welcome, <?php echo $username; ?>!</h1>

    <div class="profile-picture">
        <?php if($profilePicture): ?>
            <img src="<?php echo $profilePicture; ?>" alt="ProfilePicture">
        <?php else: ?>
            <img src="default_profile.jpg" alt="Default Profile Picture">
        <?php endif; ?>
        <form actoin="upload_profile_picture.php" method="_POST" enctype="multipart/form-data">
            <input type="file" name="profile_picture">
            <button type="submit">Upload Profile Picture</button>
        </form>
    </div>

    <div class="user-info">
    </div>

    <a href="Logout.php">LOGOUT</a>

    <script src="script.js"></script>
</body>
</html>