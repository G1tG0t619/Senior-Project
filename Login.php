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
            display: none;
        }
    </style>
  </head>
    </head>
    <body>
        <div class = "div1">
            <h1 class  = "firsth1">ReturnIt<h1>
        </div>
        
        <div class = "navbar">
            <ul class = "centered-list">
                <li><a class = "Home.php">Home</a></li>
                <li><a class = "active">Login</a></li>
                <li><a href = "About.php"></a>About</li>
                <li><a href = "Return.php"></a>Make a Return</li>
                <li><a href = "History.php"></a>Return History</li>
                <li><a href = "Contact.php"></a>Contact Us</li>
            </ul>
        </div>
        <hr>
        <form action="action_page.php" method="post">
            <div class="imgcontainer">
                <img src="img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit">Login</button>
                <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
        <hr>

    </body>
</html>