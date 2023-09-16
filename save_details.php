<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection (replace with your database credentials)
include('db_config.php');

// Process form data

$destination = $_POST['destination'];
$state = $_POST['state'];
$price = $_POST['price'];
$number = $_POST['number'];
$start_date_before= $_POST['start_date'];
$start_date = date('Y-m-d', strtotime($start_date_before));
$end_date_before= $_POST['end_date'];
$end_date = date('Y-m-d', strtotime($end_date_before));
$overview = $_POST['overview'];
$itenary = $_POST['itenary'];
$highlights = $_POST['highlights'];

// Handle uploaded images
$imageFolder = 'images/';
$image1 = $imageFolder .$_FILES['image1']['name'];
$image2 = $imageFolder .$_FILES['image2']['name'];
$image3 = $imageFolder .$_FILES['image3']['name'];



// Insert data into the database
$stmt = $conn->prepare("INSERT INTO trek_details (destination, state_region, price, people_allowed, start_date, end_date, image1, image2, image3, overview, itenary, highlights) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssdissssssss", $destination, $state, $price, $number, $start_date, $end_date, $image1, $image2, $image3, $overview, $itenary, $highlights);

if ($stmt->execute()) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

