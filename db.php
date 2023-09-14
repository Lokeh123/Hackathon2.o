<?php
$db_host = 'localhost'; // e.g., localhost
$db_user = 'root';
$db_password = 'N@lini123';
$db_name = 'registration_db'; // Change to your database name

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
