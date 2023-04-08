<?php
// Replace with your own database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insert the data into the MySQL database
$sql = "INSERT INTO usertable (username, email, pass)
VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Record inserted successfully!')</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
