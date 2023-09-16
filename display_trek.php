<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trek Details</title>
</head>
<body>
    <?php
    // Database connection (replace with your database credentials)
    include('db_config.php');
    // Retrieve title from URL parameter
    $title = $_GET['title'];

    // Query database to get details of the specified trek
    $sql = "SELECT * FROM trek_details WHERE destination = '$title'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h2>Destination: " . $row["destination"] . "</h2>";
            echo "<p>State/Region: " . $row["state_region"] . "</p>";
            echo "<p>Price: $" . $row["price"] . "</p>";
            echo "<p>Number of People Allowed: " . $row["people_allowed"] . "</p>";
            echo "<p>Start Date: " . $row["start_date"] . "</p>";
            echo "<p>End Date: " . $row["end_date"] . "</p>";
            echo "<img src='" . $row["image1"] . "' alt='Image 1'>";
            echo "<img src='" . $row["image2"] . "' alt='Image 2'>";
            echo "<img src='" . $row["image3"] . "' alt='Image 3'>";
            echo "<p>Overview: " . nl2br($row["overview"]) . "</p>";
            echo "<p>Itinerary: " . nl2br($row["itenary"]) . "</p>";
            echo "<p>Highlights: " . nl2br($row["highlights"]) . "</p>";
            echo "</div>";
        }
    } else {
        echo "No trek details found.";
    }

    $conn->close();
    ?>
</body>
</html>
