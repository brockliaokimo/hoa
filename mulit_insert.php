<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO user (id, FirstName, LastName, age, Hometown, Job)
VALUES ('001','John', 'Doe', '34', 'Vietnam', 'Engineer');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('002','Mary', 'Moe', '45', 'Taipei', 'Doctor');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('003','Julie', 'Dooley', '23', 'China', 'Teacher');";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>