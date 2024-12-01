 <?php
$username = $_POST['username'];
$user_password = $_POST['user_password'];

if (!empty($username) || !empty($user_password)) {
    $servername = "localhost"; // Replace with your MySQL server name
    $username = "mpro_unidb"; // Replace with your MySQL username
    $password = "4358"; // Replace with your MySQL password
    $dbname = "returndb"; // Replace with your MySQL database name

    $conn = new mysqli($servername, $username, $password, $dbname);

    if (mysqili_connect_error()){
        die('Connect error('. $conn->connect_errno.')' . $conn->connect_error);
    }
    else{
        $SELECT = "SELECT user_password FROM users WHERE username = ? AND user_password = ? Limit 1";

        //Prepare select statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("ss", $username, $user_password);
        $stmt->execute();
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0){
            $stmt->close();
            $INSERT = "ISNERT INTO users (username, user_password0 values (?, ?)";

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ss", $username, $user_password);
            $stmt->execute();
            echo "New record inserted successflly";
        }
        else{
            echo "Someone is already registered under this username";
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