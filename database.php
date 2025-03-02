<?php
// database.php - Connect to MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie_website";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
