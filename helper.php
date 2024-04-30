<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'gaia_plant';

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if ($conn->connect_errno) {
    echo "Failed to connect to database " . $conn->connect_error;
    exit();
}
