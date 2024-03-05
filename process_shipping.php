<?php
// Assuming you have a database connection established
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shipping_detail";

// Create a connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $pickup_location = $_POST["pickup_location"];
    $dropoff_location = $_POST["dropoff_location"];

    // Insert data into the database
    $query = "INSERT INTO shipping_details (pickup_location, dropoff_location) VALUES ('$pickup_location', '$dropoff_location')";

    // Execute the query
    $result = $connection->query($query);

    // Display a pop-up message
    echo '<script>alert("Shipping details saved successfully!");</script>';
}

// Close the database connection
$connection->close();
?>

<!-- Redirect to index.php after displaying the pop-up -->
<script>
    window.location.href = 'index.php';
</script>
