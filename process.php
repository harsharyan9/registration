<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Get form data
    $name = htmlspecialchars($_GET['name'] ?? 'N/A');
    $email = htmlspecialchars($_GET['email'] ?? 'N/A');
    $password = htmlspecialchars($_GET['password'] ?? 'N/A');
    $dob = htmlspecialchars($_GET['dob'] ?? 'N/A');
    $gender = htmlspecialchars($_GET['gender'] ?? 'N/A');
    $hobbies = isset($_GET['hobbies']) ? htmlspecialchars(implode(", ", $_GET['hobbies'])) : 'None';
    $country = htmlspecialchars($_GET['country'] ?? 'N/A');
    $comments = htmlspecialchars($_GET['comments'] ?? 'N/A');

    // Display the data
    echo "<h1>Submitted Details</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Password:</strong> $password</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Hobbies:</strong> $hobbies</p>";
    echo "<p><strong>Country:</strong> $country</p>";
    echo "<p><strong>Comments:</strong> $comments</p>";

    // Form to download file
    echo '<form action="download.php" method="POST">';
    echo '<input type="hidden" name="fileContent" value="' . htmlspecialchars("
Name: $name
Email: $email
Password: $password
Date of Birth: $dob
Gender: $gender
Hobbies: $hobbies
Country: $country
Comments: $comments
    ") . '">';
    echo '<button type="submit">Download Details</button>';
    echo '</form>';
} else {
    echo "Invalid Request Method!";
}
?>
