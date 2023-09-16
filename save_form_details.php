<?php
include('db_config.php');

// Get form data
$title = $_POST['title'];
$price = $_POST['price'];
$transactionId = $_POST['transaction_id'];
$phone = $_POST['phone'];
$user_name = $_POST['user_name'];
$email = $_POST['email'];

// Convert title to lowercase and replace spaces with underscores to create table name
$tableName = str_replace(' ', '_', strtolower($title));

// Create table if it doesn't exist
$createTableSQL = "CREATE TABLE IF NOT EXISTS $tableName (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    user_name VARCHAR(255) NOT NULL,
    phone VARCHAR(13) NOT NULL,
    email VARCHAR(255) NOT NULL,
    transaction_id VARCHAR(255) NOT NULL
)";
$conn->query($createTableSQL);

// Insert data into the table
$insertSQL = "INSERT INTO $tableName (title, price, user_name, phone, email, transaction_id) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($insertSQL);
$stmt->bind_param("sdssss", $title, $price, $user_name, $phone, $email, $transactionId);

if ($stmt->execute()) {
    // Redirect to a different page after successful form submission
    header("Location: success_page.php");
    exit(); // Ensure that no further code is executed after the redirection
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
