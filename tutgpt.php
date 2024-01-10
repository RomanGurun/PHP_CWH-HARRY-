<?php
echo "Welcome to the stage where we are ready to get connected to a database.<br>";

/*
ways to connect to a MySQL Database
1. MySQLi extension
2. PDO
*/

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "dfd";
$dbname = "gamer"; // Replace with your actual database name

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection was successful";
}

?>
