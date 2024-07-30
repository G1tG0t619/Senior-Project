<!DOCTYPE html>
<html>
    <body>
        <div class="slideshow-container" id="slideshow">
            <!-- Your existing slideshow content -->
            <!-- ... -->
        </div>
        <!--Div ends-->
        <button class="prev" onclick="plusSlides(-1)" style="float: left;">&#10094; Previous</button>
        <button class="next" onclick="plusSlides(1)" style="float: right;">Next &#10095;</button>
        <script src='script.js'></script>
        <hr><hr>
        <div class="navbar">
            <ul class="centered-list">
                <li><a href="Homepage.php">Home</a></li>
                <li><a href="Artist.php">Artists</a></li>
                <li><a href="album.php" class="active">Albums</a></li>
                <li><a href="Admin.php">Admin</a></li>
            </ul>
        </div>
        <hr>
    
        <!-- Add this form in your HTML -->
        <form action="Album.php" method="post">
            <div class="search-container">
                <h1><center>Search for albums here: </center></h1>
                <input type="text" class="search-box" name="search_album" placeholder="Search albums listed above..">
                <button class="search-button" type="submit">Search</button>
            </div>
        </form>
    
        <!-- Add this div to display search results -->
        <div class="search-results">
            <?php
            // Include database connection code here
    
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search_album'])) {
                // Perform the album search
                $servername = "localhost"; // Replace with your MySQL server name
                $username = "mpro_unidb"; // Replace with your MySQL username
                $password = "4575"; // Replace with your MySQL password
                $dbname = "unidb"; // Replace with your MySQL database name
    
                $conn = new mysqli($servername, $username, $password, $dbname);
    
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
    
                $search_album = $_POST['search_album'];
                $sql = "SELECT * FROM album WHERE title LIKE '%$search_album%'";
                $result = $conn->query($sql);
    
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='album'>";
                        echo "<hr>";
                        echo "<p><strong>Title:</strong> " . $row["Title"] . "</p>";
                        echo "<p><strong>Release Date:</strong> " . $row["Release_date"] . "</p>";
                        echo "<p><strong>Author:</strong> " . $row["Author"] . "</p>";
                        echo "<p><strong>Lead Single:</strong> " . $row["Lead_single"] . "</p>";
                        echo "<p><strong>First Week Sales:</strong> " . $row["First_week_sales"] . "</p>";
                        echo "<p><strong>Genre:</strong> " . $row["Genre"] . "</p>";
                        echo "<hr>";
                        echo "</div>";
                    }
                } else {
                    echo "No results found, please refer to the slideshow above for the albums in our database!";
                }
                $conn->close();
            }
            ?>
        </div>
    </body>
</html>