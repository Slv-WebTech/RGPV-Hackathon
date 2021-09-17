<?php



$conn = new mysqli("localhost", "root", "", "hackathon");
if (!$conn) {
    echo "This is an error " . $conn->connect_error;
}
