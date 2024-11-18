<?php

// Get return type from the form
$returnType = $_POST['return-type'];

// Redirect to appropriate page based on return type
if ($returnType = 'drop-off'){
    header('Location: dropoff.php');
}
else if ($returnType = 'pick-up'){
    header('Location: pickup.php');
}

exit;
?>