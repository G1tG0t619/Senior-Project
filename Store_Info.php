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