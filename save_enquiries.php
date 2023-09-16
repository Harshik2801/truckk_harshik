<?php
// $host = 'localhost';
// $dbname = 'trek';
// $username = 'root';
// $password = '';
// $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
// $phone = $_POST['phone'];
// $user_name = $_POST['user_name'];
// $email = $_POST['email'];
// $query = "INSERT INTO enquiries (phone, user_name, email) VALUES (:phone, :user_name, :email)";
// $stmt = $conn->prepare($query);
// $stmt->bindParam(':phone', $phone);
// $stmt->bindParam(':user_name', $user_name);
// $stmt->bindParam(':email', $email);
include('db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $phone = $_POST['phone'];
  $user_name = $_POST['user_name'];
  $email = $_POST['email'];

    $stmt = $conn->prepare("INSERT INTO enquiries (phone, user_name, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $phone, $user_name, $email);

    if ($stmt->execute()) {
        echo "Message submitted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>



