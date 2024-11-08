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