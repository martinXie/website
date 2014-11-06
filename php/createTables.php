<?php
$servername = "localhost";
$username = "root";
$password = "111111";
$dbname = "myDB";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE BasicInformation (
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name text(30) NOT NULL,
gender VARCHAR(30) NOT NULL,
age VARCHAR(50),
 TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 
