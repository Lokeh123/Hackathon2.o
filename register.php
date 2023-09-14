<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['email'];
    $email = $_POST['email'];
    $password = password_hash($_POST['psw'], PASSWORD_DEFAULT);

    // Check if the username or email already exist in the database
    $check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        echo 'Username or email already exists. Please choose a different one.';
    } else {
        // Insert user data into the database
        $insert_query = "INSERT INTO users (username, email, psw) VALUES ('$username', '$email', '$psw')";
        if ($conn->query($insert_query) === TRUE) {
            echo 'Registration successful!';
        } else {
            echo 'Error: ' . $insert_query . '<br>' . $conn->error;
        }
    }
}
?>
