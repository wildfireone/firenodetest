<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 10/08/2015
 * Time: 14:14
 */
$servername = "eu-cdbr-azure-north-d.cloudapp.net:3306";
$username = "b99256e599d9fc";
$password = "64c23a04";
$dbname = "rgutest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>