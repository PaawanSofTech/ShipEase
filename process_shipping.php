<?php
    $con = mysqli_connect("localhost","root","","shipping_detail");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $pickup_location = $_POST["pickup_location"];
    $dropoff_location = $_POST["dropoff_location"];

    // Insert data into the database
    $query = "INSERT INTO shipping_details (pickup_location, dropoff_location) VALUES ('$pickup_location', '$dropoff_location')";
    
    // Execute the query
    mysqli_query($connection, $query);

    // Optionally, you can redirect the user to a thank-you page or perform other actions
    // header("Location: thank_you.php");
    // exit();
}
?>
