<?php
$servername = "localhost";
$username = "Filip";
$password = "Filda-*-942703"; // nahraď svým skutečným heslem
$dbname = "my_blog";

// Vytvoření připojení
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrola připojení
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
