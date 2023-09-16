<?php
include('db_config.php');

$title = $_GET['title'];

$cleanTitle = $conn->real_escape_string($title);
$tableName = str_replace(' ', '_', strtolower($cleanTitle));

$query = "SELECT COUNT(*) as total FROM $tableName";
$result = $conn->query($query);

if ($result) {
    $data = $result->fetch_assoc();
    $totalEntries = $data['total'];
    echo json_encode($totalEntries);
} else {
    echo json_encode(0); // Return 0 if query fails
}

$conn->close();
?>
