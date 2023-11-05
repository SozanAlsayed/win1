<?php
// Database connection parameters

$conn = mysqli_connect('localhost','root', '','win');

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>