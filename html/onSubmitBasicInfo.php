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
echo "sql connect sucess! </br>";


$Name=$_POST["username"];//text
$Sex=$_POST["sex"];//text
$Age=$_POST["age"];//number

$HospitalNumber=$_POST["hospital_number"];//number
$OperativeTime=$_POST["operative_time"];//date
$IOL=$_POST["IOL"];//text
$Operator=$_POST["operator"];//text

$PhoneNumber=$_POST["contact"];//text  
$Address=$_POST["address"];//text

echo "add one record:</br>
	  姓名：$Name </br> 年龄：$Age </br> 性别：$Sex </br>";

$sql = "INSERT INTO basic_info (name, gender, age, phoneNumber, address, hospitalizationNo, operationTime, IOL, operator)
 VALUES ('$Name', '$Sex', $Age, '$PhoneNumber', '$Address', $HospitalNumber, '$OperativeTime', '$IOL', '$Operator')";

if ($conn->query($sql) === TRUE) 
{
    echo "New record created successfully";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
