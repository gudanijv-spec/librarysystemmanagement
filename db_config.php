<?php
$host = "localhost";
$username = "root";
$password = "zenaida"; // Default for XAMPP is empty
$dbname = "LibraryDB";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>