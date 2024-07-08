<?php
$host = "localhost";
$dbname = "shop";
$user = "root";
$pw = "";


$conn = new mysqli($host, $user, $pw, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

mysqli_set_charset($conn, "UTF8");