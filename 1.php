<!DOCTYPE html>
<html>
<head>
    <title>Insert Data</title>
</head>
<body>
    <h2>Insert Data into MySQL Table</h2>
    <form method="post" action="insert.php">
        <label for="fname">First Name:</label>
        <input type="text" name="fname" required>
        <br><br>
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
// Database connection parameters
$servername = "localhost"; 
$username = "root"; 
$password = "Password123#@!"; 
$database = "PHP";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$fname = $_POST["fname"];
$lname = $_POST["lname"];

$sql = "INSERT INTO users (fname, lname) VALUES (?, ?)";

// Prepare the SQL statement
$stmt = $conn->prepare($sql);

if ($stmt) {
    // Bind parameters
    $stmt->bind_param("ss", $fname, $lname);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "SQL statement preparation failed: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
