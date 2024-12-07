<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fileContent = $_POST['fileContent'] ?? '';

    // Set headers for file download
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="registration_details.txt"');
    
    echo $fileContent;
    exit;
} else {
    echo "Invalid Request Method!";
}
?>
