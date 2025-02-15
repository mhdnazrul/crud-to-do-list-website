<?php
$host = "localhost"; // MySQL server hostname
$user = "root";      // MySQL username
$password = "1234"; // MySQL password
$dbname = "todo_app"; // Database name

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


