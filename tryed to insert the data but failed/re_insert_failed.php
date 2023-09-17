<?php
$conn = new mysqli('localhost', 'root', '', 'ticket_booking');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "connected";
}

// Check if the POST data exists and assign default values if not
$id = isset($_POST['id']) ? $_POST['passenger_id'] : "";
$name = isset($_POST['name']) ? $_POST['passenger_name'] : "";
$age = isset($_POST['age']) ? $_POST['passenger_age'] : "";
$stating_point = isset($_POST['stating_point']) ? $_POST['passenger_stating_point'] : "";
$passenger_destination = isset($_POST['passenger_destination']) ? $_POST['passenger_destination'] : "";
$District = isset($_POST['District']) ? $_POST['District_of_bus'] : "";

// Use prepared statements to prevent SQL injection
$sql = "INSERT INTO passenger (passenger_id, passenger_name, passenger_age, passenger_stating_point, passenger_destination, District_of_bus) VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error in preparing statement: " . $conn->error);
}

$stmt->bind_param("ssssss", $id, $name, $age, $stating_point, $passenger_destination, $District);

if ($stmt->execute()) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>