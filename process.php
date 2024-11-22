<?php
// Database connection details
$servername = "localhost"; // For local server
$username = "root";        // Default username for XAMPP/WAMP
$password = "k@r@nKP9696";            // Default password for XAMPP/WAMP
$dbname = "codebook"; // Replace with your actual database name

// Create connection
$conn = new mysqli($id, $name, $email, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];

// Insert data into database
$sql = "INSERT INTO register (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Data submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

