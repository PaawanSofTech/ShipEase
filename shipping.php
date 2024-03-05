<?php
// Assuming you have a database connection established
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shipease";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $departure = $_POST["departure"];
    $arrival = $_POST["arrival"];

    // Use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM services WHERE departure = ? AND arrival = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $departure, $arrival);
    $stmt->execute();

    $result = $stmt->get_result();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .add-book-button {
            display: block;
            margin: 20px auto;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            text-align: center;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h2>Services Table</h2>


    <?php
// Display the table
if (isset($result) && $result->num_rows > 0) {
    echo "<table>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['departure']}</td>";
        echo "<td>{$row['arrival']}</td>";
        echo "<td>{$row['departure_date']}</td>";
        echo "<td>{$row['arrival_date']}</td>";
        echo "<td>{$row['cargo_size']}</td>";
        echo "<td>{$row['price']}</td>";
        echo "<td><a href='#' class='add-book-button' onclick='bookCargo()'>Book Cargo</a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No results found.";
}
?>

<!-- Add this div at the end of your HTML body -->
<div id="success-card" style="display:none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #fff; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 5px; text-align: center;">
    <h3>Cargo Request Successful!</h3>
    <p>Your cargo request has been sent to the company successfully.</p>
    <button onclick="closeSuccessCard()">OK</button>
</div>

<script>
function bookCargo() {
    
        // Show the success card
        document.getElementById('success-card').style.display = 'block';
    
}

function closeSuccessCard() {
    // Hide the success card and redirect to index.php
    document.getElementById('success-card').style.display = 'none';
    window.location.href = 'logout.php';
}
</script>

</body>
</html>
