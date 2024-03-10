<?php

// Connect to the database
$conn= mysqli_connect("localhost","root","","portfolio");

// Access form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Prepare SQL query
$query = "INSERT INTO saran (name, email, message) VALUES ('$name', '$email', '$message')";

// Execute query
$conn->query($query);

// Close connection
$conn = null;

// Redirect or display message
header('Location: index.html'); // Redirect to success page
// or
echo 'Saran terkirim.'; // Display success message
