<?php
// SSL connection setup
$con = mysqli_init();
mysqli_ssl_set($con, NULL, NULL, NULL, NULL);

// Secure connection to Azure MySQL
$server = "music.mysql.database.azure.com";
$username = "music";
$password = "Password@123"; // Store sensitive data securely in environment variables
$database = "musical_world"; // Retrieve database name from environment variable
$port = 3306;

// Initialize connection
mysqli_real_connect($con, $server, $username, $password, $database, $port, MYSQLI_CLIENT_SSL);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Secure connection established!";
}
?>
