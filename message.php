<?php
// Create a connection to the MySQL server
$servername = "localhost";
$username = "root";
$password = ""; // By default, XAMPP has an empty password for the root user
$dbname = "message"; // Name of the database

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO message (fullname, email, tel, subject, message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $fullname, $email, $tel, $subject, $message);

// Execute the statement
if ($stmt->execute()) {
    echo "<h2 style='color: green;'>Registration Successful!</h2>";
    echo "<p  style='color: green;'>Your data has been submitted and saved to the database.</p>";
} else {
    echo "<h2 style='color: red;'>Registration Failed!</h2>";
    echo "<p style='color: red;'>An error occurred while saving your data. Please try again.</p>";
}

// Close the prepared statement and the database connection
$stmt->close();
$conn->close();
?>