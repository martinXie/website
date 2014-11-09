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
$sql = "CREATE TABLE basic_info (
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name CHAR(30) NOT NULL,
gender CHAR(1) NOT NULL,
age TINYINT(3) UNSIGNED,
phoneNumber CHAR(11),
address TEXT,
hospitalizationNo INT(10) UNSIGNED,
operationTime DATETIME,
IOL CHAR(10),
operator CHAR(20)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 
