<?php
$servername = "localhost";  // Database server
$username = "root";         // Database username
$password = "";             // Database password
$dbname = "medical_db";     // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from form
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$medicalHistory = $_POST['medicalHistory'];

// Insert into database
$sql = "INSERT INTO registrations (first_name, last_name, dob, gender, medical_history)
        VALUES ('$firstName', '$lastName', '$dob', '$gender', '$medicalHistory')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Registration Successful</h2>";
    echo "<p><strong>First Name:</strong> $firstName</p>";
    echo "<p><strong>Last Name:</strong> $lastName</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Medical History:</strong> $medicalHistory</p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
