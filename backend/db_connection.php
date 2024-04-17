<?php
// Database configuration
$dbHost = 'localhost';
$dbUsername = 'your_username';
$dbPassword = 'your_password';
$dbName = 'ayurveda_db';

// Create database connection
$mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
