 <?php
$username = $_POST['username'];
$user_password = $_POST['user_password'];

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