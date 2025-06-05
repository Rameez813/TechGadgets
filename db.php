<?php
$host = "localhost";
$user = "root"; // or your hosting username
$password = ""; // add your db password
$database = "techgadgets";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>